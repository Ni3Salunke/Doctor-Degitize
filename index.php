<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAIDYA PLUS</title>
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
        .main{
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 100px;
        }
        .main .one, .two{
            margin: 50px;
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            transition: .5s;
            cursor: pointer;
        }
        .main .one:hover, .two:hover{
            transform: scale(1.1);
        }
    </style>
</head> 
<body>
    <section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
    </section>

    <div class="main">
        <a href="selectpatient.php">
        <div class="one">
            <img src="assets/images/paitent.png" alt="">
            <h1>PATIENT</h1>
        </div>
        </a>
        
        <a href="doctorlogin.php">
        <div class="two">
                <img src="assets/images/Doctor.png" alt="">
                <h1>DOCTOR</h1>
        </div>
        </a>
    </div>
</body>
</html>