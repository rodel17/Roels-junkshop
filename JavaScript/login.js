const formm = document.querySelector(".row form"),
continuebtn = formm.querySelector(".button input"),
errorTxt = document.querySelector(".error-txt");

formm.onsubmit = (e)=>{
	e.preventDefault(); //preventing form from submitting

}

continuebtn.onclick = ()=>{
	//Start Ajax
	let xhr = new XMLHttpRequest(); //creating xml object
	xhr.open("POST", "php/login.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				console.log(data);
					if(data === "success"){
						location.href = "home.php";
					}else if (data === 'Success'){
						location.href= "Admin/admin.php";
					}else{
						errorTxt.textContent = data;
						errorTxt.style.display = "block";
					}
			}
		}
	}
	// sending the form data through ajax to php
	let formData = new FormData(formm); //creating new formData Object
	xhr.send(formData); //sending the form data to php
}