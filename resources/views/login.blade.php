<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <div style="background-color: white; margin: 40px; width: auto;">
        <center>
            <img src="/assets/img/logo.png" alt="" style="width: 140px; margin-top: 100px; ">
            <br> <br> <br>
            <div class="email" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" style="color: black;">
                </div>
            </div>
            <div class="password" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
            </div>
            <div class="submit mt-3">
                <a href="/landing_page.html"> <button type="submit" class="" style="width: 465px; height: 40px; background-color: #FFE500; border: 1px black solid; border-radius: 10px; font-weight: bold">Login</button>
                </a>
            </div>
            <div class="signup mt-1" style="padding-bottom: 125px;">
                <div class="row justify-content-center">
                    <div class="col-2" style="font-size: 12px;">
                        Don't have an account yet? <a href="{{ route('register') }}"> Sign up now. </a>
                    </div>
                    <div class="col-2" style="font-size: 12px; text-align: right; margin-right: 5px;">
                        <a href="/forget.html" style="text-decoration: none;">Forget Password</a>
                    </div>
                </div>

            </div>
        </center>
    </div>

</body>

</html>
