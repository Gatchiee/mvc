<html>
<head>
	<title>MVC</title>
	<link href="view/styles/mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div class="left">
		<a href="employees.php"><img src="jwe.png" alt="jwe logo"  /></a>
		</div>
		<div class="right">
		<br />
		<br />
		<ul id="menu">
		<li><a href="employees.php?action=add">ADD EMPLOYEE</a></li>
		<li><a href="employees.php?action=display">DISPLAY EMPLOYEES</a></li>
		</ul>
		</div>
	</div>

		
	<div id="content">
	<form action="" method="post">
				<h1>Employee Information</h1>
				<br />
				<h2><?php echo $_GET['id'];?></h2>
						<table>
		<?php
			
			if( isset($Employees) && count($Employees)>0 ){
				foreach($Employees as $Employees){
					echo '
							<p> <b>Employee Name:</b> '.$Employees['name'].'</p>
							<p> <b>Age:</b> '.$Employees['age'].'</p>
							<p> <b>Address:</b>'.$Employees['address'].'</p>
							<p> <b>Position:</b>'.$Employees['position'].'</p>
						';
				}
			}
			?>
		
		<p><a href="employees.php">Back to Home<a/></p>

		</form>
	</div>
	
	<div id="footer">
	<img class="alibabatobuyoool" src="alibaba.png" alt="alibaba" />
	<img class="alibabatobuyoool" src="amazon.png" alt="amazon" />
	<img class="alibabatobuyoool" src="ebay.png" alt="ebay" />
	<img class="alibabatobuyoool" src="buyoool.png" alt="buyoool" />
	<img class="cosplaytodaki"src="cosplaysushi.png" alt="cosplaysushi" />
	<img class="cosplaytodaki"src="dakimakura.png" alt="dakimakura" />
	<img class="kigu"src="kigukawaii.png" alt="kigukawaii" />
	<p>&copy 2015 JWE GROUP PH | <a href="">TERMS AND CONDITIONS</a></p>
	</div>
</div>
</body>
</html>
