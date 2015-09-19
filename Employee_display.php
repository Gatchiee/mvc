<html>
<head>
	<title>MVC</title>
	<link href="view/styles/mystyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script>
	function confirmSubmit(){
		if(confirm('Are you sure you want to delete this?')){
			window.alert("Employee has been successfully deleted! Go to Display Employees to see changes.");
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
		<h1>Display Employees</h1>
		<br />		
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Address</th>
					<th>Position</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if( isset($Employees) && count($Employees)>0 ){
				foreach($Employees as $Employees){
					echo '
						<tr>
							<td class="center">'.$Employees['id'].'</td>
							<td class="center">'.$Employees['name'].'</td>
							<td class="center">'.$Employees['age'].'</td>
							<td class="center">'.$Employees['address'].'</td>
							<td class="center">'.$Employees['position'].'</td>
							<td class="center"><a href="Employees.php?action=view&id='.$Employees['id'].'">View</a> | <a href="Employees.php?action=update&id='.$Employees['id'].'">Update</a> | <a href="Employees.php?action=delete&id='.$Employees['id'].'" onclick="return confirmSubmit();">Delete</a></td>
						</tr>
						';
				}
			}else{
				echo "No records found";
			}
			?> 
				
			</tbody>
		</table>
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
