const formm = document.querySelector(".item-info-container .itemform"),
addtypeBtn = formm.querySelector(".item-list .submit");
errorText = document.querySelector(".error");

form.onsubmit = (e)=>{
	e.preventDefault(); //preventing form from submitting
}

addtypeBtn.onclick = ()=>{
	//Start Ajax
	let xhr = new XMLHttpRequest(); //creating xml object
	xhr.open("POST", "php/add-type.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				if(data === "success"){
					alert("Option was successfuly added!");
					location.href="add-item.php";
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