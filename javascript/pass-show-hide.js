const pField = document.querySelector(".form input[type='password']"),
toggleBtn= document.querySelector(".form .field i");

toggleBtn.onclick=()=>{
	if(pField.type=="password"){
		pField.type="text";
		toggleBtn.classList.add("active");
	}else{
		pField.type="password";
		toggleBtn.classList.remove("active");
	}
}