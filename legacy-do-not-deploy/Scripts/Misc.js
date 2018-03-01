// JavaScript
function Toggle(id){
	var e = document.getElementById(id);
	if(e.style.display == 'block'){
		e.style.display = 'none';}
	else{
		e.style.display = 'block';}
}

function ClearText(id){
	var e = document.getElementById(id);
	if(e.value == 'Your Name'){
		e.value = '';}
	if(e.value == 'Your Email'){
		e.value = '';}
}