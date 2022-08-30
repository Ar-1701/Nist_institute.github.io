<?php $active_page = 'contacts';
include "header.php"; ?>
<script type="text/javascript">
    function chkBlnk() {
        var name = document.f1.name.value;
        var email = document.f1.email.value;
        var message = document.f1.message.value;
        if (name == "") {
            alert("pls fill your name");
            document.f1.name.focus();
            return false;
        }
        if ((name.length <= 2) || (name.length > 20)) {
            alert("fill name must be between 3 to 20");
            document.f1.name.focus();
            return false;
        }
        if (!isNaN(name)) {
            alert("pls fill only characters");
            document.f1.name.focus();
            return false;
        }
        if (email == "") {
            alert("pls fill your email");
            document.f1.email.focus();
            return false;
        }
        if (email.indexOf("@") <= 1) {
            alert("invalid @ postion");
            document.f1.email.focus();
            return false;
        }
        if (message == "") {
            alert("pls fill your message");
            document.f1.message.focus();
            return false;
        } else {
            f1.submit();
            alert("Thank You!" + f1.n.value);
            return true;
        }
    }
</script>
</head>
<!-- Main-content -->
<div class="container contact">
    <h2 style=" text-align: center;text-shadow: 2px 3px 4px;color: rgb(0, 0, 0);text-decoration: red dotted underline; ">
        --Contact Us--
    </h2>
    <h3>Address:-Nistha Institute Of Science & Technology<br>Devpar,Bhawarnath Azamgarh Uttar Pradesh<br>Pincode:-276001
    </h3>
    <h3>For any query:-<a href="#">nist123@gmail.com</a></h3>
    <h3>Mobile No.:+919896988671</h3>
</div>
<BR>
<div class="container" id="bo">

    <form action="#gallery.html" target="_self" method="post" name="f1">
        <table class="table table-bordered bg-info">
            <tr>
                <th colspan="">
                    <label for="name">Your Name:</label>
                </th>
                <td>
                    <input type="text" autocomplete="0ff" name="name" required class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"> Email:</label>
                </td>
                <td>
                    <input type="email" autocomplete="0ff" name="email" required class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="message">Message:</label>
                </td>
                <td>
                    <input type="text" name="message" required autocomplete="0ff" required class="form-control">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="#" target="_blank">
                        <input id="text-btn" type="Submit" name="click" value="Send" required onclick="return chkBlnk()" class="btn btn-success">
                    </a>
                    <input id="text-btn" type="reset" name="click" value="Reset" class="btn btn-info">
                </td>
            </tr>
        </table>
    </form>
</div>
<br><br>
<!-- footer -->
<?php include "footer.php"; ?>
</body>

</html>