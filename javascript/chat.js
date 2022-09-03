const form=document.querySelector(".typing-area"),
inputField=form.querySelector(".input-field"),
sendBtn=form.querySelector("button"),
chatBox=document.querySelector(".chat-box");

form.onsubmit=(e)=>{
	e.preventDefault(); //preventing form from submitting
}


sendBtn.onclick=()=>{
	console.log("Success");
	let xhr=new XMLHttpRequest(); //creating XML object;
	xhr.open("POST","php/insert-chat.php",true);
	xhr.onload=()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status===200){
				inputField.value=""; //After inserting into db
			}
		}
	}
	//we have to send the form data from ajax to php
	let formData=new FormData(form);
	xhr.send(formData);
}

setInterval(()=>{
	let xhr=new XMLHttpRequest(); //creating XML object;
	xhr.open("POST","php/get-chat.php",true);
	xhr.onload=()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status===200){
				let data=xhr.response;
				chatBox.innerHTML=data;
			}
		}
	}
	let formData=new FormData(form);
	xhr.send(formData);
},500);//fun will run frequently after 500ms