const display_6 = document.querySelector("container");
const btn = document.querySelector("button");
const post = document.querySelector(".post");
const widget = document.querySelector(".star-widget");
const editBtn = document.querySelector(".edit");

// var btn2 = document.querySelector("button");

var message = "Thankyou very much for your response!!👷"

function gratitudeMessage(){

    alert(message)
}

btn.onclick = ()=>{
  widget.style.display = "none";
  post.style.display = "block";
//   display_6.style.display = "block"
  editBtn.onclick = ()=>{
    widget.style.display = "block";
    post.style.display = "none";
    // display_6.style.display = "none"
  }
  return false;
}
