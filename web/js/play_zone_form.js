// let Name = document.getElementsByClassName("name");
// let surname = document.getElementsByClassName("surname");
let Name = document.getElementById("firstName");
let surname = document.getElementById("lastName");

let DOB = document.getElementById("dateOFbirth");
let ageError = document.getElementById("ageError");
let postalCode = document.getElementsByClassName("postalCode")[0];
let city = document.getElementsByClassName("city")[0];
let address = document.getElementById("Address");
let email = document.getElementsByClassName("email").value;
let emailError = document.getElementById("emailError");
let textInput = document.getElementsByClassName("textInput");

let blackJackgame = document.getElementById("blackJack");
let diceRollgame = document.getElementById("diceRoll");

let walletConrainer = document.getElementsByClassName(
  "main-wallet-container"
)[0];

let walletConrainerWithDraw = document.getElementsByClassName(
  "with-wallet-container"
)[0];

let bankCard = document.querySelectorAll(".bankCard");
let wrapper = document.getElementsByClassName("wrapper")[0];

// let bankCardInputs = document.querySelectorAll(".labelInput");
let depositBTN = document.getElementsByClassName("deposit-btn")[0];
let withBTN = document.getElementsByClassName("with-btn")[0];
let selectAmountNumber = document.querySelectorAll(".select-amount-number");
let selectAmountManually = document.querySelector(".select-amount-manually");
let selectAmountManuallyWith = document.querySelector(
  ".select-amount-manually-with"
);
let allGamesBtn = document.getElementsByClassName("all-games-btn")[0];
let slotsBtn = document.getElementsByClassName("slots-btn")[0];
let dieBtn = document.getElementsByClassName("die-btn")[0];
let cardsBtn = document.getElementsByClassName("cards-btn")[0];
let walletBtn = document.getElementsByClassName("wallet-btn")[0];
let profile = document.getElementsByClassName("profile-btn")[0];

let tabp = document.getElementsByClassName("tabs-group")[0];
let tabW = document.getElementsByClassName("tabs-groupW")[0];

let general = document.getElementsByClassName("general-tab")[0];
let security = document.getElementsByClassName("security-tab")[0];

let deposit = document.getElementsByClassName("deposit")[0];
let withdraw = document.getElementsByClassName("withdraw")[0];

let formSecurity = document.getElementsByClassName("form-security")[0];
let formGeneral = document.getElementsByClassName("form-general")[0];

let showPassword = document.getElementsByClassName("eye");
let input = document.getElementsByClassName("inputPassword");

let creditCardForm = document.getElementsByClassName("credit-card-form")[0];
let creditCardWrapper = document.getElementsByClassName("wrapper")[0];
const cardNumber = document.getElementById("card-number");
const cardHolderName = document.getElementById("card-holder-name");
const cardNameInput = document.getElementById("card-name-input");
const displayValidity = document.getElementById("validity");
const validityInput = document.getElementById("validity-input");
const cardNumberDisplay = document.querySelectorAll(".card-number-display");
const cvvInput = document.getElementById("cvv");
const cvvDisplay = document.getElementById("cvv-display");
let currentSpanIndex = 0;

// setTimeout(() => {
//   window.location.reload();
// }, 3000);

//do password visible and vise versa
for (let i = 0; i < showPassword.length; i++) {
  showPassword[i].addEventListener("click", function () {
    if (input[i].type === "password") {
      input[i].type = "text";
      showPassword[i].src = "../play_zone_pic/eye-solid.svg";
    } else {
      input[i].type = "password";
      showPassword[i].src = "../play_zone_pic/eye-slash-solid.svg";
    }
  });
}

//do content visible when you click to profile -> by default GENERAL and vise versa
profile.addEventListener("click", function () {
  diceRollgame.style.display = "none";
  blackJackgame.style.display = "none";
  creditCardWrapper.style.display = "none";
  walletConrainer.style.display = "none";
  tabW.style.display = "none";
  tabp.style.display = "flex";
});

general.addEventListener("click", function () {
  diceRollgame.style.display = "none";
  creditCardWrapper.style.display = "none";
  formSecurity.style.display = "none";
  walletConrainer.style.display = "none";
  formGeneral.style.display = "block";
});

security.addEventListener("click", function () {
  diceRollgame.style.display = "none";
  creditCardWrapper.style.display = "none";
  formGeneral.style.display = "none";
  walletConrainer.style.display = "none";
  formSecurity.style.display = "block";
});

walletBtn.addEventListener("click", function () {
  diceRollgame.style.display = "none";
  blackJackgame.style.display = "none";
  creditCardWrapper.style.display = "none";
  tabp.style.display = "none";
  formGeneral.style.display = "none";
  formSecurity.style.display = "none";
  walletConrainer.style.display = "none";
  walletConrainerWithDraw.style.display = "none";
  tabW.style.display = "flex";
});

cardsBtn.addEventListener("click", function () {
  console.log("click");
  diceRollgame.style.display = "none";
  creditCardWrapper.style.display = "none";
  walletConrainer.style.display = "none";
  walletConrainerWithDraw.style.display = "none";
  formGeneral.style.display = "none";
  formSecurity.style.display = "none";
  tabp.style.display = "none";
  tabW.style.display = "none";
  blackJackgame.style.display = "block";
  //loadContentC();
});

// function loadContentC() {
//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//       blackJackgame.innerHTML = "";
//       blackJackgame.innerHTML = xhr.responseText;
//     }
//   };
//   xhr.open("GET", "../web/blackjack.html?", true); //../web/blackjack.html?
//   xhr.send();
// }

function loadContentC() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      blackJackgame.innerHTML = "";
      blackJackgame.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "../web/games/test.html", true); //../web/blackjack.html?
  xhr.send();
}

dieBtn.addEventListener("click", function () {
  console.log("click");
  blackJackgame.style.display = "none";
  walletConrainer.style.display = "none";
  creditCardWrapper.style.display = "none";
  tabp.style.display = "none";
  tabW.style.display = "none";
  //loadContentD();
});

deposit.addEventListener("click", function () {
  walletConrainerWithDraw.style.display = "none";
  walletConrainer.style.display = "flex";
});

withdraw.addEventListener("click", function () {
  walletConrainer.style.display = "none";
  walletConrainerWithDraw.style.display = "flex";
});
function loadContentD() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      //blackJackgame.innerHTML = "";
      diceRollgame.innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "../web/diceRoll/diceRoll.html", true);
  xhr.send();
}

//FIRST NAME
Name.addEventListener("input", function () {
  let pattern = /^[a-zA-Z]+$/;

  let valueWithoutSpaces = this.value.replace(/\s/g, "");
  this.value = valueWithoutSpaces;

  this.value = this.value.toLowerCase();
  if (this.value[0] === this.value[0].toLowerCase()) {
    this.value = this.value[0].toUpperCase() + this.value.slice(1);
  }

  if (!this.value.match(pattern)) {
    this.value = this.value.replace(/[^a-zA-Z]/g, "");
  }

  if (this.value.length > 40) {
    this.value = this.value.slice(0, 40);
  }
});
//FIRST NAME

//LAST NAME
surname.addEventListener("input", function () {
  let pattern = /^[a-zA-Z]+$/;

  let valueWithoutSpaces = this.value.replace(/\s/g, "");
  this.value = valueWithoutSpaces;

  this.value = this.value.toLowerCase();
  if (this.value[0] === this.value[0].toLowerCase()) {
    this.value = this.value[0].toUpperCase() + this.value.slice(1);
  }

  if (!this.value.match(pattern)) {
    this.value = this.value.replace(/[^a-zA-Z]/g, "");
  }
  if (this.value.length > 40) {
    this.value = this.value.slice(0, 40);
  }
});
//LAST NAME

for (let i = 0; i < Name.length && surname.length; i++) {
  Name[i].addEventListener("input", function () {
    this.value = this.value.toLowerCase();
    if (this.value[0] === this.value[0].toLowerCase()) {
      this.value = this.value[0].toUpperCase() + this.value.slice(1);
    }
  });
  surname[i].addEventListener("input", function () {
    this.value = this.value.toLowerCase();
    if (this.value[0] === this.value[0].toLowerCase()) {
      this.value = this.value[0].toUpperCase() + this.value.slice(1);
    }
  });
  city[i].addEventListener("input", function () {
    this.value = this.value.toLowerCase();
    if (this.value[0] === this.value[0].toLowerCase()) {
      this.value = this.value[0].toUpperCase() + this.value.slice(1);
    }
  });
}

DOB.addEventListener("input", function () {
  let dobValue = new Date(this.value);

  let currentDate = new Date();

  let age = currentDate.getFullYear() - dobValue.getFullYear();
  let monthDiff = currentDate.getMonth() - dobValue.getMonth();

  if (
    monthDiff < 0 ||
    (monthDiff === 0 && currentDate.getDay() < dobValue.getDate())
  ) {
    age--;
  }
  if (age < 18) {
    alert("You must be over 18 years old");
    this.value = "";
  }
});

postalCode.addEventListener("input", function () {
  let pattern = /^[a-zA-Z0-9\s]+$/;
  if (!this.value.match(pattern)) {
    this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, "");
  }
});

//CITY/TOWN
city.addEventListener("input", function () {
  // let pattern = /^[a-zA-Z]+$/;
  let pattern = /^[a-zA-Z]+(?:\s{1,2}[a-zA-Z]+)*$/;
  if (!this.value.match(pattern)) {
    // this.value = this.value.replace(/[^a-zA-Z]/g, "");
    this.value = this.value.replace(/[^a-zA-Z\s]/g, "");
    this.value = this.value.replace(/\s{2,}/g, " ");
  }
  if (this.value.length > 50) {
    this.value = this.value.slice(0, 50);
  }
});

//ADDRESS
address.addEventListener("input", function () {
  let pattern = /^[a-zA-Z0-9\s]+$/;
  if (!this.value.match(pattern)) {
    this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, "");
  }
});
//ADDRESS
let san;
function AmountNumber(an) {
  selectAmountNumber.forEach(function (selectAmountNumber) {
    selectAmountNumber.style.borderRadius = "";
    selectAmountNumber.style.backgroundColor = "";
  });

  let event = an.target;
  event.style.borderRadius = "50px";
  event.style.backgroundColor = "#b0e31c";
}

selectAmountNumber.forEach(function (selectAmountNumber) {
  selectAmountNumber.addEventListener("click", AmountNumber);
});

selectAmountNumber.forEach(function (num) {
  num.addEventListener("click", function () {
    let getPrice = this.getAttribute("data-price");
    selectAmountManually.value = getPrice;
  });
});

selectAmountNumber.forEach(function (selectAmountNumber) {
  selectAmountNumber.addEventListener("input", function () {
    selectAmountNumber.style.borderRadius = "";
    selectAmountNumber.style.backgroundColor = "";
  });
});

bankCard.forEach(function (bankCard) {
  bankCard.addEventListener("click", function (event) {
    wrapper.style.display = "block";
    let src = this.querySelector("img.imgBankCards").src;
    const bankLogo = document.querySelector(".visa-logo");
    bankLogo.src = src;
  });
});
creditCardForm.addEventListener("keypress", function (event) {
  //let allEmptyCount = 0;
  if (event.key === "Enter") {
    const inputs = creditCardForm.querySelectorAll("input");
    let allEmpty = true;

    inputs.forEach((input) => {
      if (input.value.trim() !== "") {
        allEmpty = false;
        //allEmptyCount++;
        return;
      }
    });

    if (allEmpty == false) {
      if (cardNumber.value.length === 16 && cvvInput.value.length === 3) {
        wrapper.style.display = "none";
        cvvInput.value = "";
        validityInput.value = "";
        cardNameInput.value = "";
        cardNumber.value = "";
        cardNumberDisplay.textContent = "";
        cardHolderName.innerText = "Your Name Here";
        displayValidity.innerText = "06/28";
        cvvDisplay.innerText = "";

        let amoutOFmoney = 0;
        let amoutOFmoneywith = 0;
        let isDepositeMade = false;

        selectAmountManually.addEventListener("input", function () {
          amoutOFmoney = parseFloat(this.value);
        });
        selectAmountManuallyWith.addEventListener("input", function () {
          amoutOFmoneywith = parseFloat(this.value);
        });

        let dep = deposit.getAttribute("att");
        let widr = withdraw.getAttribute("att");

        function updateBalance() {
          balanceSpan = document.getElementById("balance-user");
          let currentBalance = parseFloat(localStorage.getItem("balance")) || 0;
          balanceSpan.textContent = "Balance: " + currentBalance.toFixed(2);
        }
        updateBalance();
        setInterval(updateBalance, 1000);

        depositBTN.addEventListener("click", function () {
          if (dep == "dep" && !isDepositeMade) {
            balanceSpan = document.getElementById("balance-user");
            let currentBalance =
              parseFloat(balanceSpan.textContent.split(": ")[1]) || 0;
            let newBalance = currentBalance + amoutOFmoney;
            localStorage.setItem("balance", newBalance.toFixed(2));
            balanceSpan.textContent = "Balance: " + newBalance.toFixed(2);
            selectAmountManually.value = "";
            isDepositeMade = true;
          }
        });

        withBTN.addEventListener("click", function () {
          if (widr == "widr" && isDepositeMade) {
            let balanceSpan = document.getElementById("balance-user");
            let currentBalance =
              parseFloat(balanceSpan.textContent.split(": ")[1]) || 0;
            let withdrawAmount = amoutOFmoneywith;
            console.log("Money we want to withdraw: " + withdrawAmount);
            console.log("Current balance: " + currentBalance);
            if (currentBalance >= withdrawAmount) {
              let newBalance = currentBalance - withdrawAmount;
              localStorage.setItem("balance", newBalance.toFixed(2));
              balanceSpan.textContent = "Balance: " + newBalance.toFixed(2);
              selectAmountManuallyWith.value = "";
            } else {
              alert("Not enough money");
            }
          }
        });
      }
    } else {
      wrapper.style.display = "block";
    }
    console.log(allEmpty);
  }
});

cardNumber.addEventListener("input", () => {
  const inputNumber = cardNumber.value.replace(/\D/g, "");
  cardNumber.value = cardNumber.value.slice(0, 16).replace(/\D/g, "");
  for (let i = 0; i < cardNumberDisplay.length; i++) {
    if (i < inputNumber.length) {
      cardNumberDisplay[i].textContent = inputNumber[i];
    } else {
      cardNumberDisplay[i].textContent = "_";
    }
  }
  if (inputNumber.length <= cardNumberDisplay.length) {
    currentSpanIndex = inputNumber.length;
  } else {
    currentSpanIndex = cardNumberDisplay.length;
  }
});

cardNameInput.addEventListener("keydown", function (event) {
  if (cardNameInput.value.length === 0 && event.key === " ") {
    event.preventDefault();
  }
  if (event.key === " ") {
    const inputWithSpaces = cardNameInput.value + event.key;
    if ((inputWithSpaces.match(/\s/g) || []).length >= 2) {
      event.preventDefault();
    } else {
      if (!event.key.match(/[a-zA-Z]\s/)) {
        event.preventDefault;
      }
    }
  }
});

cardNameInput.addEventListener("input", () => {
  let pattern = /^[a-zA-Z]+$/;
  cardNameInput.value = cardNameInput.value.replace(/\s{3,}/g, "  ");
  if (!cardNameInput.value.match(pattern)) {
    cardNameInput.value = cardNameInput.value.replace(/[^a-zA-Z\s]/g, "");
  }

  if (cardNameInput.value.length < 1) {
    cardHolderName.innerText = "Your Name Here";
  } else if (cardNameInput.value.length > 30) {
    cardNameInput.value = cardNameInput.value.slice(0, 30);
  } else {
    cardHolderName.innerText = cardNameInput.value;
  }
});
validityInput.addEventListener("input", () => {
  const inputString = validityInput.value;
  if (inputString.length < 1) {
    displayValidity.innerText = "06/28";
    return false;
  }
  const parts = inputString.split("-");
  const year = parts[0].slice(2);
  const month = parts[1];
  //Final formatted string
  const formattedString = `${month}/${year}`;
  displayValidity.innerText = formattedString;
});
//cvv
cvvInput.addEventListener("input", () => {
  const userInput = cvvInput.value;
  const sanitizedInput = userInput.slice(0, 3);
  const numericInput = sanitizedInput.replace(/\D/g, "");
  cvvInput.value = numericInput;
  cvvDisplay.innerText = numericInput;
});
//Flip
cvvInput.addEventListener("click", () => {
  document.getElementById("card").style.transform = "rotateY(180deg)";
});
//Reflip card
document.addEventListener("click", () => {
  if (document.activeElement.id != "cvv") {
    document.getElementById("card").style.transform = "rotateY(0deg)";
  }
});
window.onload = () => {
  let balance = localStorage.getItem("balance");
  if (balance) {
    document.getElementById("balance-user").textContent = "Balance: " + balance;
  }
  cvvInput.value = "";
  validityInput.value = "";
  cardNameInput.value = "";
  cardNumber.value = "";
};
