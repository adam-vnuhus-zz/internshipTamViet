
// hover over products

function hoverFn(obj) {
	
	obj.querySelector('.hover').style.opacity= 1;
	obj.querySelector('.price').style.opacity= 0;
	obj.querySelector('.star').style.opacity= 0;
}

function outFn(obj) {
	
	obj.querySelector('.hover').style.opacity= 0;
	obj.querySelector('.price').style.opacity= 1;
	obj.querySelector('.star').style.opacity= 1;
}

/*function drop_downFn1() {
    document.getElementById("lang_drop").classList.toggle("show");
}

function drop_downFn2() {

    document.getElementById("currency_drop").classList.toggle("show");
}*/

function drop_downFn3() { 		/*it's an error when click on the icon on the button, this code only run when click the edges of button*/
	if (document.getElementById("quick_cart").style.display=== "none") {
		document.getElementById("quick_cart").style.display= "block";
		document.getElementById("wish_list").style.display= "none";
	} else {
		document.getElementById("quick_cart").style.display= "none";
	}
	// document.getElementById("quick_cart").style.display= "block";
    // document.getElementById("quick_cart").classList.toggle("show");
}

function drop_downFn4() {
	if (document.getElementById("wish_list").style.display=== "none") {
		document.getElementById("wish_list").style.display= "block";
		document.getElementById("quick_cart").style.display= "none";
	} else {
		document.getElementById("wish_list").style.display= "none";
	}
	// document.getElementById("wish_list").style.display= "block";
    // document.getElementById("wish_list").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
/*window.onclick = function(event) {
  if (!event.target.matches('.topright')) {

    var dropdowns = document.getElementById("lang_drop");
    
      if (dropdowns.classList.contains('show')) {
        dropdowns.classList.remove('show');
      }
    
  }
}*/

window.onclick = function(event) {
	if (!event.target.matches('.dd_btn')) {
		
	    var cart_dds = document.getElementsByClassName("cart_dd");
	    for (var i = 0; i < cart_dds.length; i++) {
	    	if (cart_dds[i].style.display=== "block") {
		    	cart_dds[i].style.display= "none";
		    }
	    }
	    
	 }

	 /*if (!event.target.matches('#wish_btn')) {
		
	    var cart_dds = document.getElementsByClassName("cart_dd");
	    for (var i = 0; i < cart_dds.length; i++) {
	    	if (cart_dds[i].style.display=== "block") {
		    	cart_dds[i].style.display= "none";
		    }
	    }
	    
	 }*/
}	 



// ----------------------------------------------------------tab_products-------------------------------------------------------------



function openTab(tabName, elmnt, color) {
    // Hide all elements with class="product_idx" by default */
    var i, product_idx, tablinks;
    product_idx = document.getElementsByClassName("product_idx");
    for (i = 0; i < product_idx.length; i++) {
        product_idx[i].style.display = "none";

    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        tablinks[i].style.color = "#ffffff";
    }

    // Show the specific tab content
    document.getElementById(tabName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
    elmnt.style.color = '#709b1d';
}



// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


// ----------------------------------------------------------slideshow---------------------------------------------------------------

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}