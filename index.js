const pswrdfield = document.querySelector(
  ".form .field input[type='password']"
);
const toggleBtn = document.querySelector(".form .field i");

toggleBtn.addEventListener("click", () => {
  if (pswrdfield.type == "password") {
    pswrdfield.type = "text";
    toggleBtn.classList.add("active");
  } else {
    pswrdfield.type = "password";
    toggleBtn.classList.remove("active");
  }
});
