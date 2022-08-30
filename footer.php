<!-- footer -->
<div class="footer-dark dark1">
    <footer>
        <div class="container">
            <div class="row">
                <div class=" col-md-4 item ">
                    <h3>&#9733;-ACADEMY-&#9733;</h3>
                    <ul>
                        <li><a href="course.php">COURSE</a></li><br>
                        <li><a href="admission.php">ADDMISSION</a></li><br>
                        <li><a href="#notice">NOTICE</a></li><br>
                        <li><a href="#campus">CAMPUS</a></li>
                    </ul>
                </div>
                <div class=" col-md-4 item  ">
                    <h3> &nbsp;&#9733;-ABOUT-&#9733;</h3>
                    <ul>
                        <li><a href="about.php">ABOUT </a></li><br>
                        <li><a href="#director">ABOUT DIRECTOR</a></li><br>
                        <li><a href="#hod">ABOUT H.O.D</a></li>
                    </ul>
                </div>
                <div class="col-md-4 item text">
                    <div class="m">
                        <h3>&#9733;-CONTACT US-&#9733;</h3>
                        <!-- <h2 class="footer">----Contact Information----</h2> -->
                        <b>Address:-</b><b>Nistha Institute Of Science & Technology Bhawarnath Azamgarh Uttar
                            Pradesh<br> PinCode:-276001</b><br>
                        <b>Email Us:-</b><a href="contact.php" id="footer-email">nist1234@gmail.com</a><br>
                        <b>Mobile No.:-9709346206</b>
                    </div>
                </div>

                <p id="copyright">© Copyright 2022 | Powered by Rohan</p>

            </div>

        </div>

    </footer>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>

</html>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>