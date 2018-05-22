function isValid() {
  var flag = true;

  var prenom = $("#input-prenom");
  var nom = $("#input-nom");
  var tel = $("#input-tel");
  var email = $("#input-email");
  var message = $("#input-message");

  if (!prenom.val()) {
    flag = false;
    console.log("Prenom = VIDE");
  }
  if (!nom.val()) {
    flag = false;
    console.log("Nom = VIDE");
  }
  if (!tel.val()) {
    flag = false;
    console.log("Tel = VIDE");
  }
  if (!email.val()) {
    flag = false;
    console.log("Email = VIDE");
  }
  if (!message.val()) {
    flag = false;
    console.log("Message = VIDE");
  }
  return flag;
}

function submitForm() {
  console.log("DANS LA FNC");
  if (!isValid()) {
    alert("CHAMPS PAS RENSEIGNES !");
    console.log("CHAMPS PAS RENSEIGNES !");
  }
}

function submitV2() {
  var form = document.getElementById('FormContact');
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }

    if (grecaptcha.getResponse() == '') {
      event.preventDefault();
      event.stopPropagation();
      $("#captcha-feedback").css("display", "block");
    }

    form.classList.add('was-validated');
  }, false);
}
