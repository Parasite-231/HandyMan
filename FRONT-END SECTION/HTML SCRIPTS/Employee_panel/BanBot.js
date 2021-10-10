function hourglass() {
    var a;
    a = document.getElementById("banbot");
    a.innerHTML = "&#xf251;";
    setTimeout(function () {
        a.innerHTML = "&#xf252;";
      }, 1000);
    setTimeout(function () {
        a.innerHTML = "&#xf253;";
      }, 2000);
  }
  hourglass();
  setInterval(hourglass, 3000);