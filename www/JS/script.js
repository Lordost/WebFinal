var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function currentDiv(n) {
	showDivs(slideIndex = n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("NewsImage");
	if (n > x.length) {slideIndex = 1} ;   
	if (n < 1) {slideIndex = x.length} ;
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	}
	x[slideIndex-1].style.display = "block";
}

var slide = 20000;

function desctext(n) {
	if(n > 0){
		slide++;
	}
	if(n < 0){
		slide = slide - 1;
	}
	
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("NewsName").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "../newstext.php?page="+slide%4, true);
	xhttp.send();
}

