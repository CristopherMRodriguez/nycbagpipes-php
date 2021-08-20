function Open() {

    document.querySelector(".nav-hamburger").style.display = "block";
    document.querySelector(".hamburger-icon").style.display = "none";
    document.querySelector(".youtube").style.display = "none"
  }

  function Close() {

    document.querySelector(".nav-hamburger").style.display = "none";
    document.querySelector(".hamburger-icon").style.display = "block";
    document.querySelector(".youtube").style.display = "block"

  }

  function mobile() {
    let doc = document.getElementById("hire").style.display;
    if (doc != "block") {document.getElementById("hire").style.display = "block";}
    if (doc == "block") {document.getElementById("hire").style.display = "none";}
  }

  function mobile2() {
    let doc = document.getElementById("learn").style.display;
    if (doc != "block") {document.getElementById("learn").style.display = "block";}
    if (doc == "block") {document.getElementById("learn").style.display = "none";}
  }

  function mobile3() {
    let doc = document.getElementById("faq").style.display;
    if (doc != "block") {document.getElementById("faq").style.display = "block";}
    if (doc == "block") {document.getElementById("faq").style.display = "none";}
  }