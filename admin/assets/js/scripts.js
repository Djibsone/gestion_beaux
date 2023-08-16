const eye = document.querySelectorAll(".fa-eye");
const eyeslash = document.querySelectorAll(".fa-eye-slash");
const passwordFields = document.querySelectorAll("input[type=password]");

eye.forEach((item, index) => {
  item.addEventListener("click", () => {
    eyeslash[index].style.display = "block";
    item.style.display = "none";
    passwordFields[index].type = "password";
  });
});

eyeslash.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.style.display = "none";
    eye[index].style.display = "block";
    passwordFields[index].type = "text";
  });
});