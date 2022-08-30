<?php include "header.php";
include "config.php";
$sub_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql  = "SELECT course.id,course.course_name,subjects.eligible,subjects.syllabus,
subjects.about FROM course
LEFT JOIN subjects
ON course.id = subjects.id
WHERE course.id = $sub_id ";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
if (mysqli_num_rows($result)) {
	while ($row = mysqli_fetch_assoc($result)) {
?>
		<!-- Main-content -->
		<div class="container">
			<h1 class="sub"><?php echo $row['course_name']; ?></h1>
		</div>
		<BR>
		<div class="container subject img-rounded">

			<h1 class="subName"><?php echo $row['course_name']; ?></h1>
			<img src="Image/img.jpg" alt="img" width="200px" height="250" margin-top="20px" style="float:Right;border-radius:20px">
			<ul class="sublist">
				<li><?php echo $row['about']; ?></li>
			</ul>
			<h1 class="subName">Eligibility Criteria </h1>
			<li style="font-style: normal;font-family: sans-serif;font-weight: bold;
	font-size: large;list-style-position: inside;list-style: none;margin-left: 35px; color: rgb(224, 67, 9)">
				<?php echo $row['eligible']; ?>
			</li>
			<h1 class="subName">About the Programme </h1>
			<p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 900;">Fast growing information technology and communication systems have become critical components of almost every company’s plan. All the companies leverage on the new information technologies and communication systems require expert professionals, who can apply computer science principles to solve problems and to interface between business and technology.

				<br> <br> This six semester long undergraduate program creates skilled, adaptable graduates who are able to design computer-based solutions to address the need of various industry, commerce, science, entertainment and the public sector.

				<br> <br> In this program students are exposed to foundations of computers & IT as well various languages for computer applications development including the latest developments in the industry so that students develop themselves as an application software developer for Desktop, Network based, Web based or mobile applications.
			</p>

			<h1 class="subName">Sllybus</h1>
			<ul>
				<li>
					<?php echo $row['syllabus']; ?>
				</li>
			</ul>
			<h1 class="subName">Career path you can choose after the course </h1>
			<ul>
				<li>
					Programmer.
				</li>
				<li>
					Software Developer.
				</li>
				<li>
					Web Developer.
				</li>
				<li>
					Web designer.
				</li>
				<li>
					Network Administrator.
				</li>
				<li>
					System Manager.
				</li>
				<li>
					Computer Programmer.
				</li>
				<li>
					Software Tester.</li>
			</ul>
		</div>
<?php  }
} ?>
<br><br>
<!-- footer -->
<?php include "footer.php"; ?>
</body>

</html>