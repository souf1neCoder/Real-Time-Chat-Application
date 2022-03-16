
const form = document.querySelector('.typing-area'),
sendBtn = form.querySelector("button"),
inputField = form.querySelector('.input-field'),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","application/insert-chat.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
           
              inputField.value = "";
              

            }
        }
    }
    let formData = new FormData(form);

    xhr.send(formData);
    
}
// 
chatBox.onmouseenter = ()=>{
    chatBox.classList.add('active')
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove('active')
}
// 
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","application/get-chat.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
               chatBox.innerHTML = data;
               if(!chatBox.classList.contains("active")){
                   scrollToBottom();
               }
               scrollToBottom();
            }
        }
    }
    let formData = new FormData(form);

    xhr.send(formData);
  }, 500);




  function scrollToBottom(){
      chatBox.scrollTop = chatBox.scrollHeight;
  }