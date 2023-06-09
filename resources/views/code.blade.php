<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/code.css">
</head>

<body>
    <div style="background-color: white; margin: 40px; width: auto;">
        <center>
        <img src="/assets/img/KingDesign.png" alt="" style="width: 200px; margin-top: 150px;">
        </center>
        <br> <br>
        <div class="name" style="margin-left: 495px; margin-right: 495px;">
            <label for="exampleFormControlInput1" class="form-label text-black fw-bold">Enter code</label>

            <div class=" mt-2">
                <input class="form-control" type="text" placeholder="Code" aria-label="default input example">
            </div>
            <p class="mt-2">The code has been sent to your <b>Email</b></p>
        </div>

        <div class="submit mb-3 text-center" style="padding-bottom: 255px;">
            <a href="{{ route('reenter_password') }}"> <button type="submit" class="" style="width: 465px; height: 40px; background-color: #FFE500; border: 1px black solid; border-radius: 10px; font-weight: bold">Enter</button>
            </a>
        </div>
    </div>

</body>

</html>
