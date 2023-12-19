const searchbar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
const userList = document.querySelector(".users .users-list");

searchBtn.addEventListener("click", () => {
  searchbar.classList.toggle("active");
  searchbar.focus();
  searchBtn.focus.toggle("active");
  searchbar.value = "";
});

// searchbar.onKeyup = () => {
//   let searchTerm = searchbar.value;
//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "php/search.php", true);
//   xhr.onload = () => {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         let data = xhr.response;
//         console.log(data);
//         userList.innerHTML = data;
//       }
//     }
//   };
//   xhr.setRequestHeader("Content-type", "application/www/x-www-form-urlencoded");
//   xhr.send("searchTerm=" + searchTerm);
// };

searchbar.addEventListener("keyup", () => {
  let searchTerm = searchbar.value;
  if (searchTerm != "") {
    searchbar.classList.add("active");
  } else {
    searchbar.classList.remove("active");
  }
  console.log("searchTerm:", searchTerm);
  // Check if searchTerm is defined and not empty before making the AJAX request
  if (searchTerm !== undefined && searchTerm !== "") {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          // console.log(data);
          userList.innerHTML = data;
        }
      }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // Correct content-type
    xhr.send("searchTerm=" + searchTerm);
  }
});

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/user1.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        // console.log(data);
        userList.innerHTML = data;
      }
    }
  };
  xhr.send();
}, 500);
