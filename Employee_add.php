<html>
<head>
	<title>MVC</title>
	<link href="view/styles/mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>

<script>
function confirmSubmit(){
	var ar= [document.addform.empID.value, document.addform.empName.value, document.addform.empAge.value, document.addform.empAddress.value, document.addform.empPosition.value];
	var check=true;
	for(var i=0;i<5;i++){
		if((ar[i]).length==0){
			check=false;
		}
	}
	if(check)
	alert("Employee has been successfully added! Go to Display Employees to see changes.");
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
		<br />	
			<form name="addform" action="" method="post">
				<h1>Add Employee</h1><br />
				<p>Employee ID:<br />
					<input type="text" name="empID" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )){ alert('Numbers only!!'); return false; }" /></p><br />
				<p>Employee Name:<br />
					<input type="text" name="empName" required /></p><br />
				<p>Employee Age:<br />
					<input type="text" name="empAge" required onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )){ alert('Numbers only!!'); return false; }" /></p><br />
				<p>Employee Address:<br />
					<input type="text" name="empAddress" required /></p><br />
				<p>Employee Position:<br />
					<input type="text" name="empPosition" required /></p><br />
	
			<p>
				<input type="submit" value="Add" onclick="confirmSubmit();"/>
				<input type="reset" value="Clear" />
			</p>
			<br />
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
