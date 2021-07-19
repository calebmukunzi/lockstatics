<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	
	<link rel="stylesheet" type="text/css" href="external.css">
	<link rel="stylesheet" type="text/css" href="file.css">
</head>
<body>

	<label color="gray"><h1><center>REGISTERED STUDENTS FORM</center></h1></label> 
<fieldset>
 		<legend>View Informations</legend>
		<form>
			<table>
				<tr>
					<td>
				<table cellpadding="2" cellspacing="5" border="2" width="700px" height="500px">
 			<thead>
 				<tr style="background-color: brown;">
 					<th>FirstName</th>
 					<th>LastName</th>
 					<th>Middlename</th>
 					<th>Gender</th>
					<th>Course</th>
					<th>phone</th>
					<th>Email</th>
 				
 				</tr>
 			</thead>
 			<tbody>
 				<tr style="background-color:yellow;">
 					<td ></td>
 					<td style="background-color: black;"></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr style="background-color: blue;">
 					<td></td>
 					<td></td>
 					<td style="background-color: black;"></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr style="background-color: red;">
 					<td></td>
 					<td></td>
 					<td></td>
 					<td style="background-color: black;"></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr style="background-color: grey;">
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td style="background-color: black;"></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr style="background-color: white;">
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td style="background-color: black;"></td>
 					<td></td>
 				</tr>
 				<tr style="background-color: green;">
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td style="background-color: black;"></td>
 				</tr>
 			</tbody>
 		</table>
					</td>
					<td>
						
					</td>
				</tr>
			</table>
		<button onclick="window.print()">Print this page</button><button><a href="login.html">Logout</a></button>
		
		
		</form>
		<ul>
							<li>John<span class="close"> &times;</span></li>
							<li>Marry<span class="close">&times;</span></li>
							<li>Jeff<span class="close">&times;</span></li>
							<li>Madam<span class="close">&times;</span></li>
							<li>Joseph<span class="close">&times;</span></li>
							<li>Jamal<span class="close">&times;</span></li>
						</ul>
		<script >
			var closebtns= document.getElementsByClassName("close");
			var i;
				for(i = 0; i < closebtns.length; i++){
					closebtns[i].addEventListener("click",function(){
						this.parentElement.style.display='none';
					});
				}
		</script>
 	</fieldset>
 	
	
</body>
</html>