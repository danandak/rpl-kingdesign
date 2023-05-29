<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/register.css">
</head>

<body>
    <div style="background-color: white; margin: 40px; width: auto;">
        <center>
            <img src="/assets/img/KingDesign.png" alt="" style="width: 200px; margin-top: 100px; ">
            <br> <br> <br>
            <div class="name" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Name" aria-label="default input example">
                </div>
            </div>
            <div class="email" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" style="color: black;">
                </div>
            </div>
            <div class="password" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="col-auto mb-3">
                    <label for="inputPassword1" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                </div>
            </div>
            <div class="repassword" style="margin-left: 495px; margin-right: 495px; background-color: #D9D9D9;">
                <div class="col-auto mb-3">
                    <label for="inputPassword2" class="visually-hidden">Reenter Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Reenter Password">
                </div>
            </div>
            <div class="form-check mb-3" style="margin-left: 495px; margin-right: 560px;">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    I have read and agree with these terms & conditions
                </label>
            </div>
            <div class="submit mb-3" style="padding-bottom: 170px;">
                <a href="/login.html"> <button type="submit" class="" style="width: 465px; height: 40px; background-color: #FFE500; border: 1px black solid; border-radius: 10px; font-weight: bold">Register</button>
                </a>
            </div>
        </center>
    </div>

</body>

</html>
