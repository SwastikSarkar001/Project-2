<?php
	include '../Essential Kits/php/conn.php';
	include '../Essential Kits/php/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../Essential Kits/php/Metadata.php'; ?>
    <title>CTS Library</title>
    <link rel="stylesheet" href="About-style.css">
    <link rel="stylesheet" href="../Essential Kits/css/Navbar.css">
    <link rel="stylesheet" href="../Essential Kits/footer/footer-style.css">
</head>
<body>
    <?php $flag=1; ?>
    <?php include '../Essential Kits/php/Navbar.php'?>
    <div class="boxmain background">
                <div id="slidebox">
                    <h2>Gallery of Library</h2>
                    <div>
                        <div class=" mySlides">
                            <img src="https://i.ibb.co/Rp9L54H/LIB2.jpg">
                            <div><h1><b>Entry</b></h1></div>
                        </div>
                        <div class=" mySlides">
                            <img src="https://i.ibb.co/vh3MXZQ/LIB3.jpg">
                            <div><h1><b>Interior</b></h1></div>
                        </div>
                        <div class=" mySlides">
                            <img src="https://i.ibb.co/7gV0mw7/LIB4.jpg">
                            <div><h1><b>Librarian</b></h1></div>
                        </div>
                        <div class=" mySlides">
                            <img src="https://i.ibb.co/cTjwPvJ/lib6.jpg">
                            <div><h1><b>Interior</b></h1></div>
                        </div>
                    </div>
                    <button class="nav-btn" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="nav-btn" onclick="plusDivs(1)">&#10095;</button>
                </div>

                <!-- <div class="firstHalf">
                    <h2>The Calcutta Technical School</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci vel doloremque soluta ab similique dignissimos laborum quam eum, vitae quaerat illum, quo voluptatibus deserunt. Tempora pariatur libero accusamus cum harum unde nostrum! Commodi pariatur, ipsum expedita eum dolores ipsam illo perspiciatis similique, incidunt aut doloribus voluptates. Perferendis incidunt ratione quos.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas velit in officiis, exercitationem temporibus eius repudiandae sed optio sequi officia, architecto quaerat. Tenetur eveniet beatae fugiat maiores, aliquid porro minus incidunt commodi? Consectetur voluptate deserunt culpa provident neque ad dolorum voluptatibus? In cumque dicta harum a vero ducimus. Laudantium laboriosam quo, repellendus animi molestias aspernatur maiores consequatur excepturi beatae asperiores atque ad sunt numquam ducimus voluptatum. Eius, quas voluptate mollitia est corporis expedita reprehenderit itaque ut unde labore! Enim ipsam amet facere laboriosam ex molestiae necessitatibus maxime atque placeat aut repellendus ullam magni quisquam maiores perspiciatis, fugiat tempora dolores! Sequi.</p>
                </div> -->

                <div class="secondHalf">
                    <h2>The Calcutta Technical School Library</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus dolores debitis molestiae, molestias similique sequi quisquam, necessitatibus vero facere porro excepturi harum voluptatem consectetur voluptas esse reprehenderit ipsa quo, voluptate eos! Minus, ab mollitia?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iure odit est a? Ducimus eos iusto placeat aliquam incidunt recusandae fuga delectus, accusantium corrupti obcaecati exercitationem quam reiciendis nostrum pariatur.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, molestiae quos dolorum obcaecati, sunt blanditiis adipisci consequatur quidem sit nihil voluptas similique architecto repellendus corporis tenetur accusamus distinctio fugit sapiente minima, placeat inventore facilis voluptates expedita repellat. Illum aperiam vero totam veniam quibusdam exercitationem accusamus qui, perferendis neque corrupti est, hic autem libero minima excepturi dolores magnam explicabo in nesciunt voluptatem. Obcaecati inventore minima magnam ab aliquam dolores perspiciatis est repellat natus eius eos totam voluptatem, quae ad quisquam saepe praesentium omnis architecto temporibus magni iusto dolorum? Inventore reprehenderit molestias temporibus quam nam sapiente, quia, saepe laudantium, aliquid dolores vero!
                    </p>
                    <ul>
                        <li><strong>Rule 1: </strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, asperiores?</li>
                        <li><strong>Rule 2: </strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut.</li>
                        <li><strong>Rule 3: </strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, aut officia.</li>
                        <li><strong>Rule 4: </strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, asperiores?</li>
                        <li><strong>Rule 5: </strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, aut officia.</li>
                    </ul>  
                </div>
    </div>
    <?php include '../Essential Kits/footer/footer.php'?>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }
        </script>
        <script src="../Essential Kits/js/Navbar.js"></script>
</body>
</html>