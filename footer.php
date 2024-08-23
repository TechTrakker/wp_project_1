<div class="footer">
    <div class="form">
        <h3 class="form-1">Feedback</h3>
        <form action="Forms.php" method="post"> 
            <input style="width: 245px;" type="text" name="name" id="name" placeholder="Your Name"
                aria-required="false"><br>
            <input style="width: 245px;" type="email" name="email" id="email" placeholder="Your Email" required><br>
            <input style="width: 245px;" type="text" name="linkedin" id="link" placeholder="Your Linkedin URL"
                aria-required="false"><br>
            <input style="width: 245px;" type="text" name="feedback" id="feed" placeholder="Feedback" required><br>
            <button style="width: 145px;" class="btn-l" id="btn-ll" type="submit">SUBMIT</button>
            <button class="rest" id="reset" type="reset">RESET</button>
        </form>
    </div>
    <div class="ab-out-us">
        <h3 id="ab-out"><b>About Us</b></h3>
        <p id="ab-out1">iCode Guru is on a mission to promote programming at scale. Let us share our professional
            skills, learn from others, and grow together.</p>
    </div>
    <div class="con-tact">
        <h3 id="con-tact"><b>Contact Us</b></h3>
        <p id="con-tact1"><b>Email: info@icode.guru</b></p>
        <p id="co-tact2"><b>Location: San Jose, CA, USA</b></p>
    </div>
</div>
<!-- Again Social Links -->
<div class="social">
    <div class="contact-social">
        <div class="contact">
            <p>2024 © All Rights Reserved | iCodeGuru</p>
        </div>
        <div class="social-media">
            <a href="https://www.facebook.com/iCodeGuru" target="_blank" class="social-item">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.youtube.com/@iCodeGuru0" target="_blank" class="social-item">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.linkedin.com/company/iCode-Guru" target="_blank" class="social-item">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- Footer Call -->

<?php wp_footer(); ?>

</body>

</html>