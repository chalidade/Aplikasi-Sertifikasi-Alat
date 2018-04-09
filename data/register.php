<!DOCTYPE html>
<html lang="en">
<head>
	<title>Remain Me</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Account Register
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

          <div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="text" name="id" placeholder="Id User">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

          <div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="tlp" placeholder="Nomor Telpon">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

          <div>
            <select name="status" class="pilihan">
              <option selected disabled>Jenis Kelamin</option>
              <option value="l">Laki - Laki</option>
              <option value="p">Perempuan</option>
          </select>
          </div>

          <div>
            <select name="status" class="pilihan">
              <option selected disabled>Jabatan</option>
              <option value="spv">SPV</option>
              <option value="safety">Safety Officier</option>
              <option value="pihak">Pihak Pelaksanaan</option>
            </select>
					</div>

          <div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

          <div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="password" name="tlp" placeholder="Repeat Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
          <br>
					<div class="text-center">
						<span class="txt1">
							Have an Account ?
						</span>

						<a href="login.php" class="txt2 hov1">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
