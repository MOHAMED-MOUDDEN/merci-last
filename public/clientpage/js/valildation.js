function afficheCodePromo() {
    var x = document.getElementById("coupon");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}