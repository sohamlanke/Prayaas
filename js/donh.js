const form = document.getElementById("form");
const name = document.getElementById("name");
const email = document.getElementById("email");
const amount = documen.getElementById("amount");

//add event

form.addEventListener("submit", (event) => {
  event.preventDefault();
  validate();
});
// final valid

//email function

const isEmail = (emailval) => {
  var atSymbol = emailval.indexOf("@");
  if (atSymbol < 1) return false;
  var dot = emailval.lastIndexOf(".");
  if (dot <= atSymbol + 2) return false;
  if (dot === emailval.length - 1) return false;
  return true;
};

// Validate function

const validate = () => {
  const nameval = name.value.trim();
  const emailval = email.value.trim();
  const amountval = amount.value.trim();

  //validate name
  if (nameval === "") {
    setErrormsg(name, "name cannot be blank");
  } else if (nameval.length <= 2) {
    setErrormsg(name, "name must greater than 4 char");
  } else {
    setSucessMsg(name);
  }
  //validate email
  if (emailval === "") {
    setErrormsg(email, "email cannot be blank");
  } else if (!isEmail(emailval)) {
    setErrormsg(email, "not a valid email");
  } else {
    setSucessMsg(email);
  }

  //validate amount
  if (amountval === "") {
    setErrormsg(amount, "Please enter the amount to donate");
  } else if (isNaN(amountval)) {
    setErrormsg(amount, "Enter only numeric value");
  } else if (amountval < 50) {
    setErrormsg(amount, "Minimum payable amount is 50");
  } else if (amountval > 10000) {
    setErrormsg(amount, "Mmaximum payable amount is 10000");
  } else {
    setSucessMsg(amount);
  }


};

function setErrormsg(input, errormsg) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control error";
  small.innerText = errormsg;
}

function setSucessMsg(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}
