function validate() {
	var title= document.getElementById('title').value;
	var price= document.getElementById('price').value;
	document.getElementById('titleError').innerHTML= "";
	document.getElementById('priceError').innerHTML= "";

	if (title== "") {
		document.getElementById('titleError').innerHTML= "Title is required!";
		return false;
		/*<?php
			die("22222222");
		?>*/
	}

	if (price== "") {
		document.getElementById('priceError').innerHTML= "Price is required!";
		return false;
	}

	if (price <= 0) {
		document.getElementById('priceError').innerHTML= "Invalid number!";
		return false;
	}
}