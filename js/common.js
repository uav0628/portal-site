
/* Insert header file and footer file to each id selector  */
$(function(){
    $("#myheader").load("header.html");
    $("#myfooter").load("footer.html");
})


/* For dropbox  */
/* When the user clicks on the button, 
   toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

/* Close the dropdown if the user clicks outside of it */
window.onclick = function(e) {
    /* dropbtnを探してそれが押されたらshow classを付与する */
    if (!e.target.matches('.dropbtn')) {
	var myDropdown = document.getElementById("myDropdown");
	if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
	}
    }
}
