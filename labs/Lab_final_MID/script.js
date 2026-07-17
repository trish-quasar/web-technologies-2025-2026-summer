const form = document.getElementById("club_form");

let wrongAttempts = 0;
let isLocked = false;

form.addEventListener("submit", function (event) {
  event.preventDefault();

  clearErrors();

  let firstName = document.getElementById("first_name");
  let lastName = document.getElementById("last_name");
  let email = document.getElementById("email");
  let password = document.getElementById("password");
  let clubCategory = document.getElementById("club_category");
  let joinReason = document.getElementById("join_reason");

  let gender = document.querySelector('input[name="gender"]:checked');

  let interestedClubs = document.querySelectorAll(
    'input[name="interested_club"]:checked',
  );

  let namePattern = /^[A-Za-z]+$/;

  let emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

  let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/;

  let valid = true;

  if (firstName.value.trim() == "") {
    showError(firstName, "firstNameError", "First name is required.");

    valid = false;
  } else if (!namePattern.test(firstName.value.trim())) {
    showError(firstName, "firstNameError", "Only alphabets are allowed.");

    valid = false;
  }

  if (lastName.value.trim() == "") {
    showError(lastName, "lastNameError", "Last name is required.");

    valid = false;
  } else if (!namePattern.test(lastName.value.trim())) {
    showError(lastName, "lastNameError", "Only alphabets are allowed.");

    valid = false;
  }

  if (email.value.trim() == "") {
    showError(email, "emailError", "Email address is required.");

    valid = false;
  } else if (!emailPattern.test(email.value.trim())) {
    showError(email, "emailError", "Enter a valid email address.");

    valid = false;
  }

  if (isLocked == true) {
    showError(
      password,
      "passwordError",
      "Password is locked. Try again after 1 minute.",
    );

    valid = false;
  } else if (password.value == "") {
    showError(password, "passwordError", "Password is required.");

    valid = false;
  } else if (!passwordPattern.test(password.value)) {
    wrongAttempts++;

    valid = false;

    if (wrongAttempts > 3) {
      isLocked = true;
      password.disabled = true;

      showError(password, "passwordError", "Password locked for 1 minute.");

      setTimeout(function () {
        isLocked = false;
        wrongAttempts = 0;
        password.disabled = false;
        password.value = "";
        password.classList.remove("errorBorder");

        document.getElementById("passwordError").innerHTML =
          "Password unlocked. Try again.";
      }, 60000);
    } else {
      showError(
        password,
        "passwordError",
        "Use 8 characters with uppercase, lowercase and number. Attempt " +
          wrongAttempts +
          " of 4.",
      );
    }
  } else {
    wrongAttempts = 0;
  }

  if (gender == null) {
    document.getElementById("genderError").innerHTML =
      "Please select your gender.";

    valid = false;
  }

  if (interestedClubs.length == 0) {
    document.getElementById("clubError").innerHTML =
      "Select at least one club.";

    valid = false;
  }

  if (clubCategory.value == "") {
    showError(clubCategory, "categoryError", "Please select a club category.");

    valid = false;
  }

  if (joinReason.value.trim() == "") {
    showError(joinReason, "reasonError", "This field is required.");

    valid = false;
  } else if (joinReason.value.trim().length < 20) {
    showError(joinReason, "reasonError", "Write at least 20 characters.");

    valid = false;
  }

  if (valid == true) {
    alert("Registration submitted successfully.");

    wrongAttempts = 0;

    form.reset();
    clearErrors();
  }
});

function showError(input, errorId, message) {
  input.classList.add("errorBorder");

  document.getElementById(errorId).innerHTML = message;
}

function clearErrors() {
  let errors = document.querySelectorAll(".error");

  for (let i = 0; i < errors.length; i++) {
    errors[i].innerHTML = "";
  }

  let fields = document.querySelectorAll(
    'input[type="text"], input[type="email"], input[type="password"], select, textarea',
  );

  for (let i = 0; i < fields.length; i++) {
    fields[i].classList.remove("errorBorder");
  }
}
