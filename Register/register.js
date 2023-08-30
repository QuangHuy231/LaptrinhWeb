var form = document.querySelector("#form");
var msv = document.querySelector("#msv");
var fullName = document.querySelector("#name");
var email = document.querySelector("#email");
var genders = document.querySelectorAll('input[name="gender"]');
var interests = document.querySelectorAll('input[name="interest"]');
var nationality = document.querySelector("#nationality");
var note = document.querySelector("#note");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  validator();
});

function validator() {
  if (msv.value === "") {
    msv.style.backgroundColor = "yellow";
    errorMessage(msv, "Không để trống mã");
  } else {
    successMessage(msv);
  }

  if (fullName.value === "") {
    fullName.style.backgroundColor = "yellow";
    errorMessage(fullName, "Không để trống họ tên ");
  } else {
    successMessage(fullName);
  }

  if (email.value === "") {
    email.style.backgroundColor = "yellow";
    errorMessage(email, "Không để trống email ");
  } else {
    successMessage(email);
  }

  if (!genders[0].checked && !genders[1].checked) {
    document.querySelector(".error-gender").innerText = "Phải chọn giới tính";
    document.querySelector(".gender-group").style.background = "yellow";
  } else {
    document.querySelector(".error-gender").innerText = "";
    document.querySelector(".gender-group").style.background = "none";
    document.querySelector(".gender-group").style.borderColor = "green";
  }

  var check = 0;
  for (var i = 0; i < interests.length; i++) {
    if (interests[i].checked == true) {
      check++;
    }
  }
  if (check == 0) {
    document.querySelector(".error-interest").innerText = "Phải chọn sở thích";
    document.querySelector(".interest-group").style.background = "yellow";
  } else {
    document.querySelector(".error-interest").innerText = "";
    document.querySelector(".interest-group").style.background = "none";
    document.querySelector(".interest-group").style.borderColor = "green";
  }

  if (nationality.value == 0) {
    document.querySelector(".error-nationality").innerText =
      "Phải chọn quốc tịch";
    document.querySelector(".select").style.background = "yellow";
  } else {
    document.querySelector(".error-nationality").innerText = "";
    document.querySelector(".select").style.background = "none";
    document.querySelector(".select").style.borderColor = "green";
  }

  if (note.value.length > 200) {
    errorMessage(note, "Ít hơn 200 ký tự");
  } else {
    successMessage(note);
  }
}

//set lỗi
function errorMessage(input, message) {
  var formGroup = input.parentElement;

  var span = formGroup.querySelector("span");

  formGroup.className = "form-group error";
  span.innerText = message;
}

//set thành công
function successMessage(input) {
  var formGroup = input.parentElement;
  formGroup.className = "form-group success";
}
