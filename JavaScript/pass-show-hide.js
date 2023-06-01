const pswrdField = document.querySelector(".lightbox-basic input[type='password']"),
toggleBtn = document.querySelector(".lightbox-basic .col-lg-4 i");

toggleBtn.onclick = ()=>{
	if(pswrdField.type == "password"){
		pswrdField.type = "text";
		toggleBtn.classList.add("active");
	}
	else{
		pswrdField.type = "password";
		toggleBtn.classList.remove("active");
	}
}