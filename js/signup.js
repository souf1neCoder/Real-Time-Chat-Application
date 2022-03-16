const formRegister  = document.querySelector(".form-register"),
      submitBtn = formRegister.querySelector('.btn-register'),
      alertMsg = document.querySelector(".alert_msg"),
      alertDan = document.querySelector(".alert-danger");

formRegister.onsubmit = (e)=>{
    e.preventDefault();
}
submitBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","application/register.php");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "login";
                }else{
                    alertMsg.textContent = data;
                    alertDan.style.display = "block";
                }
                console.log(data);
            }
        }
    }
    let formData = new FormData(formRegister);
    xhr.send(formData);
}
