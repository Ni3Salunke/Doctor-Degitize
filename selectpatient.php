<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select the patient</title>
    <link rel="icon" type="image/x-icon" href="logo.png">

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body{
            background: linear-gradient(90deg, #40f849 0%, #3F5EFB);
        }
        .card{
            display: flex;
            text-align: center;
            width: fit-content;
            margin: auto;
            margin-top: 50px;
        }
        .card img{
            width: 200px;
        }
        .card h1{
            margin-top: 30px;
            background: -webkit-linear-gradient(#40f849, #3F5EFB);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        #h{
            text-align: center;
            margin-top: 100px;
            font-size: 40px;
            letter-spacing: 5px;
            color: white;
        }
        #h::after{   
            content: "";
            height: 5px;
            width: 500px;
            background : linear-gradient(90deg, #3F5EFB 0%, #40f849);
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        .first{
            margin: 50px;
            background-color: white;
            border-radius: 25px;
            padding: 40px;
            transition: .5s;
            cursor: pointer;
        }
        .end{
            margin: 50px;
            background-color: white;
            border-radius: 25px;
            padding: 40px;
            transition: .5s;
            cursor: pointer;
        }
        .first:hover, .end:hover{
            transform: scale(1.1);
            box-shadow: 15px 20px 20px #252525;
        }
    </style>

</head>
<body>
    <h1 id="h">SELECT THE PATIENT TYPE</h1>
    <div class="card">
        <div class="first">
            <a href="patient_registration.php">
            <img src="user.png" alt="">
            <h1>NEW</h1>
            </a>
        </div>
        <div class="end">
            <a href="paitent_existing.php">
            <img src="group.png" alt="">
            <h1>EXISTING</h1>
            </a>
        </div>
    </div>
</body>
</html>