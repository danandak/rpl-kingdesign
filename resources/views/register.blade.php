<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/register.css">
</head>

<body>
  <div style="background-color: white; margin: 40px; width: auto;">
    <center>
      <img src="/assets/img/KingDesign.png" alt="" style="width: 200px; margin-top: 100px; ">
      <br> <br> <br>
      <form action="/register" method="POST">
				@csrf
        <div class="name" style="margin-left: 495px; margin-right: 495px;">
          <div class="mb-3">
            <input class="form-control" name="nama" type="text" placeholder="Name"
              aria-label="default input example" value="{{ old('nama') }}" required>
          </div>
        </div>
        <div class="email" style="margin-left: 495px; margin-right: 495px;">
          <div class="mb-3">
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" value="{{ old('email') }}" style="color: black;" required>
          </div>
        </div>
        <div class="password" name="password"
          style="margin-left: 495px; margin-right: 495px;">
          <div class="col-auto mb-3">
            <label for="inputPassword1" class="visually-hidden">Password</label>
            <input type="password" id="password" minlength="8" name="password" class="form-control" id="inputPassword2" placeholder="Password" required>
          </div>
        </div>
        <div class="repassword" style="margin-left: 495px; margin-right: 495px;">
          <div class="col-auto mb-3">
            <label for="inputPassword2" class="visually-hidden">Reenter Password</label>
            <input type="password" id="repass" class="form-control" id="inputPassword2"
              placeholder="Reenter Password" minlength="8" onkeyup="check_pass()" requied>
						<p id="repass-validation" class="text-danger text-start mt-1"></p>
          </div>
        </div>
        <div class="form-check mb-3" style="margin-left: 495px; margin-right: 560px;">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
          <label class="form-check-label" for="flexCheckChecked">
            I have read and agree with these terms & conditions
          </label>
        </div>
        <div class="submit mb-3" style="padding-bottom: 170px;">
          <a href="/login"> <button type="submit" class=""
              style="width: 465px; height: 40px; background-color: #FFE500; border: 1px black solid; border-radius: 10px; font-weight: bold">Register</button>
          </a>
        </div>
      </form>
    </center>
  </div>

</body>

<script>
	function check_pass() {
		let pass = document.getElementById('password');
		let repass = document.getElementById('repass');
		let repass_val = document.getElementById('repass-validation');
		
		if(repass.value != pass.value && repass.value.length > 0) {
			repass_val.style.display = 'block';
			repass_val.innerHTML = 'Password tidak sesuai';
		}
		else {
			repass_val.style.display = 'none';
		}
	}
</script>

</html>
