const form = document.querySelector(".lightbox-basic .signupForm"),
continueBtn = form.querySelector(".button input"),
errorText = document.querySelector(".error-text");

form.onsubmit = (e)=>{
	e.preventDefault(); //preventing form from submitting

}

continueBtn.onclick = ()=>{
	//Start Ajax
	let xhr = new XMLHttpRequest(); //creating xml object
	xhr.open("POST", "php/signup.php", true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				if(data === "success"){
					location.href="home.php";
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