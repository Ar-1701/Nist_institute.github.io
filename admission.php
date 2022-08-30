<?php include "header.php"; ?>
<!-- Main-content -->
<div class="container addmission-form">
    <div class="row">
        <div class="col">
            <h2>form</h2>
            <p>Addmission Form<br></p>
            <form action="index.php" onsubmit="return myform()" name="button">

                <label for="n">Name:</label> <br>
                <input type="text" placeholder="Enter your Name" float style="margin-left:0px;" size="25" id="user"
                    autocomplete="off">
                <span id="usename"></span><br><br>

                <label for="n"> Father's Name:</label><br>
                <input type="text" placeholder="Enter F.Name" float style="margin-right:0px;" size="25" id="fname"
                    autocomplete="off">
                <span id="fname1"></span><br><br>

                <label for="n"> Mother's Name:</label><br>
                <input type="text" placeholder="Enter M.Name" float style="margin-right:0px;" size="25" id="mname"
                    autocomplete="off">
                <span id="mname1"></span><br><br>

                <label for="n"> Mobile Number:</label><br>
                <input type="text" placeholder="Enter phone Number" id="mobile" float style="margin-right:px;" size="25"
                    autocomplete="off">
                <span id="phone"></span><br><br>

                <label for="n"> D.O.B.:</label><br>
                <input type="date" id="dob" float style="margin-left:px;" autocomplete="off">
                <span id="dob1"></span><br><br>

                <label for="n"> Course:</label><br>
                <select name="n" id="Course">
                    <option value="">Course</option>
                    <option value="BCA">BCA</option>
                    <option value="CCC">CCC</option>
                    <option value="DCA">DCA</option>
                    <option value="PGDCA">PGDCA</option>
                    <option value="TALLY">TALLY</option>
                </select>
                <span id="course1"></span><br><br>

                <label for="n"> Gender:</label><br>
                <input type="radio" name="sex" id="sex" value="male">MALE
                <input type="radio" name="sex" id="sex" value="female">FEMLAE
                <input type="radio" name="sex" id="sex" value="other">OTHER
                <span id="sex1"></span>
                <br>
                <label for="n"> Address:</label><br>
                <input type="text" placeholder="Enter Address" id="address" float style="margin-right:px;" size="25"
                    autocomplete="off">
                <span id="add1"></span><br><br>

                <label for="n"> Email:</label><br>
                <input type="text" placeholder="Enter Email" id="email" float style="margin-left:px;" size="25"
                    autocomplete="off">
                <span id="email1"></span><br><br>

                <label for="n"> Password:</label><br>
                <input type="text" placeholder="Enter password" id="pass" float style="margin-left:px;" size="25"
                    autocomplete="off">
                <span id="password"></span>
                <br><br>

                <label for="n"> Confirm_Password:</label><br>
                <input type="text" placeholder="Enter again password" id="conpass" float style="margin-right:px;"
                    size="25" autocomplete="off">
                <span id="confirm_password"></span>
                <br><br>

                <input type="submit" id="btn" onsubmit="myform()">
                <input type="reset" id="btn2">

            </form>
            <br>
        </div>
    </div>
</div>

<br><br>
<!-- footer -->
<?php include "footer.php"; ?>