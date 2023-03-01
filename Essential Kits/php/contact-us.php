<div class="popup">
    <div class="close-btn"><div class="closeicon">&times;</div></div>
    <div class="form">
        <form action="" method="post">
            <h2>Contact Us</h2>
            <p>Not getting things that you want? Feel free to say something to the developers to help them to improve the website</p>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email">
            </div>
                <div class="form-element">
                <label for="feedback"></label>Feedback<br>
                <textarea name ="feedback" id="feedback" placeholder="Enter your feedback"></textarea>
            </div>
                <div class="form-element">
                <button type ="submit" name ="submit" value ="submit">Send Feedback</button>
            </div>
        </form>
        <?php
                if(isset($msg)) {
                    echo $msg;
                }
        ?>
    </div>
</div>