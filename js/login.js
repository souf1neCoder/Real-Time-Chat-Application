const formLogin = document.querySelector(".form-login"),
  submitBtn = formLogin.querySelector(".btn-login"),
  alertMsg = document.querySelector(".alert_msg"),
  alertDan = document.querySelector(".alert-danger");

formLogin.onsubmit = (e) => {
  e.preventDefault();
};
submitBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "application/login.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href = "your-dir/users.php";
        } else {
          alertMsg.textContent = data;
          alertDan.style.display = "block";
        }
        console.log(data);
      }
    }
  };
  let formData = new FormData(formLogin);
  xhr.send(formData);
};
