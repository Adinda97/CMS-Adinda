<div class="slider">	
	<div id="slider">
		<div>
			<img class="mySlides" src="img/Fotoslider1.png" alt="slider1" width="1000px"> 
			<img class="mySlides" src="img/Fotoslider2.png" alt="slider2" width="1000px">
		</div>
	</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script> 

			