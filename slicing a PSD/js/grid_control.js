function drop_downFn3() {
  if (document.getElementById("quick_cart").style.display === "none") {
    document.getElementById("quick_cart").style.display = "block";
  } else {
    document.getElementById("quick_cart").style.display = "none";
  }
}

function drop_downFn4() {
  if (document.getElementById("wish_list").style.display === "none") {
    document.getElementById("wish_list").style.display = "block";
  } else {
    document.getElementById("wish_list").style.display = "none";
  }
}

function hoverFn(obj) {
  obj.querySelector(".hover").style.opacity = 1;
  obj.querySelector(".price").style.opacity = 0;
  obj.querySelector(".star").style.opacity = 0;
}

function outFn(obj) {
  obj.querySelector(".hover").style.opacity = 0;
  obj.querySelector(".price").style.opacity = 1;
  obj.querySelector(".star").style.opacity = 1;
}
