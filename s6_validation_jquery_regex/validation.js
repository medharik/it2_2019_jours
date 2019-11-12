$(document).ready(function() {
  $(".alert-danger").hide();

  $(document).on("click", "button", function() {
    var erreur = "";
    let modelEMail = /[a-z._]{1,}[0-9]{0,}@itsup.ma/; //regex
    if (!modelEMail.test($("#email").val())) {
      erreur += "Email inavlide<br>";
    }
    let modelCin = /[a-z]{1,2}[0-9]{6}/; //regex
    if (!modelCin.test($("#cin").val())) {
      erreur += "Cin inavlide<br>";
    }

    if (erreur == "") {
      $("form").submit();
    } else {
      $(".alert-danger")
        .show()
        .html(erreur);
    }
  });
});
