<html>
	<head>
		<style>
			.bg{
			background-image:url("imgs/emblem.jpg");
			height:1000px;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
		
		   }
			
			
			#title{
				background-color:transparent;
				font-size:24px;
				color:#E53935;
				
				color:white;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color:transparent;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #cccccc;
				color:black;
			}

			
			
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
				margin-top:45%;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
				margin-top:45%;
			
			}
			
		</style>
	</head>
	
	<body class="bg">
		
		<ul>
			<li id="titlehead"><p id="title"style="text-decoration: underline;text-decoration-color:White;font-size:30px;">Criminal Info</p></li>
			<li><a href="about_us.php"><strong>About us</strong></a></li>
			<li><a href="admin_login.php"><strong>Admin</strong></a></li>
			<li><a href="officer_login.php"><strong>User</strong></a></li>
			<li><a class="active" href="home.php"><strong>Home</strong></a></li>
		</ul>
		
		
		
		
		<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS crimedb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		
		
		$conn->close();
		}
		?>
		
		<div id=bottom_posts>
		
			<div id=posts>
				<h2 style="font-size:28px; margin-top:25% "> Criminal Info </h2>
				<div id=img_title>
					<img src="imgs\criminalimg.png">
					<p style="font-size:20px;">Easy criminal details management</p>
				</div>
				</div>
			<div id=posts>
				<h2 style="font-size:28px;"> Traffic Crimes</h2>
				<div id=img_title>
					<img src="imgs\trafficimg.png">
					<p style="font-size:20px;">This system also manages the crimes related to traffic crimes</p>
				
				</div>
			</div>
			<div id=posts>
				<h2 style="font-size:28px;"> Easy Access to Crime Records </h2>
				<div id=img_title>
					<img src="imgs\searchimg.png">
					<p style="font-size:20px;">Any crime records can be accessed in few seconds</p>
				
				</div>
			</div>
			</div>
	</body>
	
	
			
	
	
</html>