function calculer_ttc() {
  var cprix = document.getElementById("prix");
  var cqte = document.getElementById("qte");
  var r = document.getElementById("resultat");
  var yaerreur = false;

  if (isNaN(cprix.value) || isNaN(cqte.value)) {
    r.innerHTML = "ce n'est pas un nombre";

    r.style.color = "red";
    cprix.value = 0;
    cqte.value = 0;
    yaerreur = true;
    // cprix.select();
    cprix.focus();
  } else if (cprix.value >= 0 && cqte.value >= 0) {
    var tht = cprix.value * cqte.value;
    //   alert("le tht est " + tht + " DHS");
    r.innerHTML = "le tht est " + tht + " DHS";
    r.style.color = "blue";
    cprix.className = "b_ok";
  } else {
    r.innerHTML = "les nombres doivent etre > 0";
    r.style.color = "red";
    yaerreur = true;
  }

  r.style.display = "block";
  cqte.className = cprix.className = !yaerreur ? "b_ok" : "b_erreur";
}
