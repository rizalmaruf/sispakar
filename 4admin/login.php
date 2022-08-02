<?php
include "koneksi.php";
?>
<div class="panel panel-default">
  	<div class="panel-body">
		<form method="post" action="4admin/cek_login.php">
			<table class="table">
				<tr class="success">
					<td colspan="2" >Daftar Diagnosa</td>
				</tr>
				<tr>
					<td><label><select name='level' class='multilevel' required></label>
							<option value=''>-Pilih-</option>
							<option value='admin'>Admin</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Username</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="username" class='input' maxlength='50' required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="********" class='input'  maxlength='50' required /></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" class="submit-login" value="Login" /></td>
				</tr>
			</table>
		</form>
		<?php
		if(@$_GET['code'] == 1) {
		?>
		<div class="alert alert-danger">
			Username or Password Wrong !!!
		</div>
		<?php
		}
		if(@$_GET['code'] == 2) {
		?>
		<div class="alert alert-success">
			Anda Telah Keluar (Logout)
		</div>
		<?php
		}
		if(@$_GET['code'] == 3) {
		?>
		<div class="alert alert-danger">
			Anda harus Login dulu !!!
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>