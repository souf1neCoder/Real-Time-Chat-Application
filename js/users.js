const searchInput = document.querySelector(".search input"),
      searchBtn = document.querySelector(".search button");
      usersList = document.querySelector(".users-list");
      searchBtn.onclick = () => {
        searchInput.classList.toggle("show");
        searchInput.focus();
        searchBtn.classList.toggle("active");
        searchInput.value = "";
      }
searchInput.onkeyup = ()=>{
    let searchTerm = searchInput.value;
    if(searchTerm != ""){
      searchInput.classList.add("active");

    }else{
      searchInput.classList.remove("active");

    }
    let xhr = new XMLHttpRequest();
  xhr.open("POST", "application/search.php");
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
        console.log(data);
      }
    }
  };
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send("searchTerm="+searchTerm);
}
//
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "application/users.php");
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if(!searchInput.classList.contains("active")){

                usersList.innerHTML = data;
              }
         
          console.log(data);
        }
      }
    }
   
    xhr.send();
},500);
