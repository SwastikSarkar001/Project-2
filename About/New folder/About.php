<?php
	include '../Essential Kits/php/conn.php';
	include '../Essential Kits/php/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CTS Library</title>
	<link rel="icon" type="image/x-icon" href="../../Essential Kits/pic/LOGO.png">
	<link rel="stylesheet" href="../Essential Kits/css/Navbar.css">
	<link rel="stylesheet" href="../fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.css">
	<link rel="stylesheet" href="./About-style.css">
</head>

<body>
	<?php
		include "../Essential Kits/php/Navbar.php";
	?>
	<div class="main-container">
		<div class="firstHalf">
			<h2>The Calcutta Technical School</h2>
			<p>
				The Calcutta Technical School (CTS) is a technical institute is located in the city of Kolkata,
				West Bengal of India. It is affiliated to the West Bengal State Council of Technical Education
				(WBSCTE),[1] approved by All India Council For Technical Education (AICTE) and provides Diploma
				level technical education in Electrical, Mechanical, Computer Science and Civil Engineering..
			</p>
		</div>
		<div class="w3-container">
			<h2>Gallery of Library</h2>
			<div class="w3-content w3-display-container">
				<div class="w3-display-container mySlides">
					<img src="https://i.ibb.co/Rp9L54H/LIB2.jpg" style="width:100%">
					<div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
						Entry
					</div>
				</div>

				<div class="w3-display-container mySlides">
					<img src="https://i.ibb.co/vh3MXZQ/LIB3.jpg" style="width:100%">
					<div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
						Interior
					</div>
				</div>

				<div class="w3-display-container mySlides">
					<img src="https://i.ibb.co/7gV0mw7/LIB4.jpg" style="width:100%">
					<div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
						Librarian
					</div>
				</div>

				<div class="w3-display-container mySlides">
					<img src="https://i.ibb.co/cTjwPvJ/lib6.jpg" style="width:100%">
					<div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
						Interior
					</div>
				</div>

				<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">Previous</button>
				<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">Next</button>	
			</div>
		</div>
	</div>
	<footer id="credits" class="footer">
		<p>hii</p>
	</footer>
	<footer id="copyright" class="footer">
		<p>www.ctslibrary.com All Copyrights reserved ©2022.</p>
	</footer>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) { slideIndex = 1 }
			if (n < 1) { slideIndex = x.length }
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex - 1].style.display = "block";
		}
	</script>
	<script src="../Essential Kits/js/Navbar.js"></script>
	<script src="https://kit.fontawesome.com/bef3bec8c1.js" crossorigin="anonymous"></script>
</body>

</html>