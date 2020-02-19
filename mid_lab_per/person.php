<!DOCTYPE html>
<html>
<head>
	<title>PERSON PROFILE</title>
</head>
<body>
	
<form method="POST" action="personcheck.php">

	
		
	<table border="1" width="50%" height="200%"  align = "center" >
		<tr>
		<td colspan="5">
		<h1 align='center'> Person Profile </h1>
		</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="uname" ></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td> <input type="text" name="email" > </td>
		</tr>
		
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
		</tr>
		<tr>
			<td>Date Of Birth:</td>
			<td><input type="date" name="" value=""/></td>
		</tr>
		
		
			<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc.
				<input type="checkbox" name="">MSc.
			</td>
		</tr>
	
		<tr>
			<td> Photo </td>
			<td>
				<input type ="file" name="photo_file">
			</td>
		</tr>
		<tr>
			
			<td align ="right" colspan="2">
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	
	</form>
</body>
</html>