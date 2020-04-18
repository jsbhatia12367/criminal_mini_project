<html>
	<head>
		<style>
			.bg{
			background-image:url("imgs/police_record.jpg");
			height:1000px;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
			opacity:0.8;
		   }
		   
			#title{
				background-color:transparent;
				font-size:24px;
				color:white;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transparent;
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

			
			.grid-container {
				display: grid;
				grid-template-columns: auto auto;
				grid-gap: 20px;
				padding: 10px;
				background-color:transparent;
			}
			.cont{
				background-position:center;
				 background: rgb(0, 0, 0); 
				background: rgba(0, 0, 0, 0.5); 
				color: #f1f1f1;
				height:1000px;
			}
			
			.btn{
				background-color: transparent;
				border: none;
				color: #424242;
				padding-top:7px;
				text-align: center;
				margin-bottom:0px;
				color:white;
				font-size: 20px;
			}
			
			.btn:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
			
		</style>
	</head>
	
	<body>
		<div class="bg">
		<div class="cont">
		
		<ul>
			<li id="titlehead"style="text-decoration: underline;text-decoration-color:black;"><p id="title" style="font-size:30px;">Criminal Info</p></li>
			<li><a href="about_us.php">About us</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="officer_login.php">User</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
		
		
		<h2 style="font-style:italic; font-size:35px;padding-left:30px;">Search Dashboard</h2>
		
		
		<div class="grid-container">
			<div style="text-align:right;"> <img src="imgs\criminalmini.png">  </div>
			<div ><button type="button" class="btn" onclick="location.href='criminal_search.php'">Criminal Record</button></div>
			<div style="text-align:right;"><img src="imgs\trafficmini.png"></div>  
			<div ><button type="button" class="btn" onclick="location.href='traffic_search.php'">Traffic Record</button></div>
			
		</div>
		
		
		
		
		
	</body>
	
	
	


</html>