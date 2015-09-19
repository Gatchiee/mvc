<html>
<head>
	<title>MVC</title>
	<link href="view/styles/mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script>
	function confirmSubmit(){
		if(confirm('Are you sure you want to update this Employee?')){
			window.alert("Information is now updated! Go to Display Employees to see changes.");
			return true;
		}
		return false;
	}
</script>
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
				<h1>Update Employee</h1>
				<p>Employee ID<br />
					<input type="text" value="<?php echo $_GET['id'];?>" name="empID" readonly /></p>
				<p>Employee Name<br />
					<input type="text" name="empName" required /></p>
				<p>Employee Age<br />
					<input type="text" name="empAge" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )){ alert('Numbers only!!'); return false; }" /></p>
				<p>Employee Address<br />
					<input type="text" name="empAddress" required /></p>
				<p>Employee Position<br />
					<input type="text" name="empPosition" required /></p>
			<p>
				<input type="submit" value="Update" onclick="return confirmSubmit();"/>
				<input type="reset" value="Clear" />
			</p>
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
