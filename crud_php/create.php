<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Add News</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="5" cellpadding="10">
			<tr>
				<label><b>Select: </b></label>
				<select name="ore" required>
					<option value="">Country</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="International">International</option>
				</select>
			</tr>	
			<tr>
				<th>News</th>
				<td><input type="text" name="fname" placeholder="news" /></td>
			</tr>		
			<tr>
				<td><button type="submit" name="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>