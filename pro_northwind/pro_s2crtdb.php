<!DOCTYPE html>
<html>
<title>PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body id="myPage">

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align">

			<a href="https://github.com/sampan6108111007" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>PROFILE</a>


			<div class="w3-dropdown-hover ">
				<button class="w3-button" title="Notifications"> MENU <i class="fa fa-caret-down"></i></button>
				<div class="w3-dropdown-content w3-card-4 w3-bar-block">
					<li>pro_s1connect.php</li>
					<a href="pro_s2crtdb.php" class="w3-bar-item w3-button">pro_s2crtdb</a>
					<a href="pro_s3select.php" class="w3-bar-item w3-button">pro_s3select</a>
					<a href="pro_s4insert.php" class="w3-bar-item w3-button">pro_s4insert</a>
					<a href="pro_s5delete.php" class="w3-bar-item w3-button">pro_s5delete</a>
					<a href="pro_s6update.php" class="w3-bar-item w3-button">pro_s6update</a>
					<a href="pro_s7drop.php" class="w3-bar-item w3-button">pro_s7drop</a>

				</div>
			</div>
		</div>

		<!-- Image Header -->
		<div class="w3-display-container w3-animate-opacity">
			<p alt="boat" style="width:100%;min-height:350px;max-height:470px;">
				<div class="w3-container w3-padding-32 w3-center ">
					<?php
					if (file_exists("pro_s1connect.php"))
						require("pro_s1connect.php");
					else
						die("File not found");


					if ($dbstatus == 0) dbWork("create database $db");
					qWork("create table $tb (PID int(11),Pname char(40),SupID int(11),Cat_ID int(11),QPU int(11))");
					//qWork("insert into $tb values('1001','Tom')");
					//qWork("insert into $tb values('1002','Dang')");
					//qWork("insert into $tb values('1003','Pom')");
					if ((int)phpversion() >= 7) $connect->close();
					else mysql_close($connect) . "<br/>";
					echo '<a href="index.php">back</a>' . "<br/>";

					function dbWork($sql)
					{
						global $db, $host, $uname, $upass, $connect;
						if ((int)phpversion() >= 7) {
							if ($connect->query($sql) === FALSE)
								echo "$sql : failed " . $conn->error . "<br/>";
							else {
								echo "$sql : succeeded<br/>";
								$connect = new mysqli($host, $uname, $upass, $db);
							}
						} else {
							if (!$result = mysql_query($sql, $connect))
								echo "$sql : failed<br/>";
							else
								echo "$sql : succeeded<br/>";
						}
					}
					function qWork($sql)
					{
						global $connect, $db;
						if ((int)phpversion() >= 7) {
							if ($connect->query($sql) === FALSE)
								echo "$sql : failed " . $conn->error . "<br/>";
							else
								echo "$sql : succeeded<br/>";
						} else {
							if (!$result = mysql_db_query($db, $sql))
								echo "$sql : failed<br/>";
							else
								echo "$sql : succeeded<br/>";
						}
					}
					?>
				</div>
		</div>

		<!-- Footer -->
		<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
			<h4>Follow SAMPAN SU</h4>
			<a class="w3-button w3-large w3-teal" href="https://web.facebook.com/profile.php?id=100029279708428" title="Facebook"><i class="fa fa-facebook"></i></a>
			<a class="w3-button w3-large w3-teal" href="https://twitter.com/SuSampan" title="Twitter"><i class="fa fa-twitter"></i></a>
			<a class="w3-button w3-large w3-teal" href="https://www.youtube.com/channel/UCfapp5DYa0jRIFlrLsrmLXw?view_as=subscriber" title="Google +"><i class="fa fa-youtube"></i></a>
			<a class="w3-button w3-large w3-teal" href="https://www.instagram.com/sampansu11/?hl=en" title="instagram"><i class="fa fa-instagram"></i></a>

		</footer>

		<script>
			// Script for side navigation
			function w3_open() {
				var x = document.getElementById("mySidebar");
				x.style.width = "300px";
				x.style.paddingTop = "10%";
				x.style.display = "block";
			}

			// Close side navigation
			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
			}

			// Used to toggle the menu on smaller screens when clicking on the menu button
			function openNav() {
				var x = document.getElementById("navDemo");
				if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
				} else {
					x.className = x.className.replace(" w3-show", "");
				}
			}
		</script>

</body>

</html>