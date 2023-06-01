const form = document.querySelector(".personal-info-container .updateform"),
updateBtn = form.querySelector(".button input"),
errorText = document.querySelector(".error");

form.onsubmit = (e)=>{
	e.preventDefault(); //preventing form from submitting
}

updateBtn.onclick = ()=>{
	//Start Ajax
	let xhr = new XMLHttpRequest(); //creating xml object
	xhr.open("POST", "php/update-profile.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				if(data === "success"){
					alert("Profile has been updated!");
					location.href="personal-info.php";
				}else{
					errorText.style.display = "block";
					errorText.textContent = data;
				}
			}
		}
	}
	// sending the form data through ajax to php
	let formData = new FormData(form); //creating new formData Object
	xhr.send(formData); //sending the form data to php
}