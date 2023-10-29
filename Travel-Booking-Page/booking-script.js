let pDetails = JSON.parse(localStorage.getItem("pDetails"));

let pkgName = document.querySelector(".pkgName");
let pkgPrice = document.querySelector(".pkgPrice");
let pkgImg = document.querySelector(".pkgImg");
let whereTo = document.querySelector(".whereTo");
let numPer = document.querySelector(".numPer");

pkgName.value = "Package Name:  " + pDetails[0];
pkgPrice.value = pDetails[1];
pkgImg.src = pDetails[2];
whereTo.value = pDetails[0];

numPer.addEventListener("change", () => {
  console.log(numPer.value);

  console.log(pDetails[1]);

  // const ints = [pDetails].map((num) => parseInt(num));
  // console.log(ints);
  // console.log(pDetails.Map(parseInt(pDetails[1])));
});
