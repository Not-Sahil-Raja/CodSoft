let pDetails = JSON.parse(localStorage.getItem("pDetails"));

let pkgName = document.querySelector(".pkgName");
let pkgPrice = document.querySelector(".pkgPrice");
let pkgImg = document.querySelector(".pkgImg");
let whereTo = document.querySelector(".whereTo");

pkgName.value = "Package Name:  " + pDetails[0];
pkgPrice.value = "Total Price:  " + pDetails[1];
pkgImg.src = pDetails[2];
whereTo.value = pDetails[0];
