function tester() {
  // var t = document.getElementsByTagName("input");
  var t = document.querySelectorAll("input");
  var is_error = false;

  for (var i = 0; i < t.length; i++) {
    // console.log(" element " + i + " est " + t[i].value);

    if (t[i].value == "") {
      is_error = true;
    }
  }

  if (is_error == true) {
    document.querySelector("#erreur").innerHTML =
      "tous les champs sont requis  ";
  }

  console.log("prix est " + t[0].value);
}
