var mainImg = document.getElementById("mainImg");
var smallImg = document.getElementsByClassName("small-img");

for (var i = 0; i < smallImg.length; i++) {
    smallImg[i].addEventListener("click", function() {
        mainImg.src = this.src;
    });
}