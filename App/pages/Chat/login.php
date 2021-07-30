<form method="post" action="process.php">
	<table>
		<tr>
			<td colspan="2">
				<center>
					<h1>Login</h1>
			</td>
		</tr>

		<tr>
			<td>
				Email : </td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<td> Password : </td>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td colspan="2">
				<center> <input type="submit" name="loginbtn" />
			</td>
		</tr>
	</table>
	<?php if (isset($_GET['login_error'])) { ?><?php echo $_GET['login_error']; ?>
<?php } ?>
</form>