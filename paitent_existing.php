<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Patient</title>
    <link rel="icon" type="image/x-icon" href="logo.png">

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body{
            background:  linear-gradient(90deg, #40f849 0%, #3F5EFB);
        }
        form{
            margin: auto;
            margin-top: 50px;
            margin-bottom: 25px;
            display: grid;
            /* transform: translate(100%, 30%); */
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            width: 500px;
        }
        form h1{
            text-align: center;
            margin-bottom: 30px;
            background: -webkit-linear-gradient(#40f849, #3F5EFB);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        h1::after{   
            content: "";
            height: 5px;
            width: 250px;
            background : linear-gradient(90deg, #40f849 0%, #3F5EFB);
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        form label{
            margin-top: 20px;
            margin-left: 10px;
            font-size: 18px;
        }
        form input, select{
            padding: 10px;
            margin: 10px;
            border-radius: 8px;
            font-size: large;
            border: 2px solid #40f849;
        }
        form .radio{
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 5px;
            border-radius: 10px;
            border: 2px solid #40f849;
        }
        form #button{
            font-size: 20px;
            border: none;
            padding: 13px;
            width: 96%;
            border-radius: 5px;
            margin-top: 20px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #40f849 0%, #3F5EFB);
            cursor: pointer;
            color: white;
        }
        @media (max-width:900px) {
            form{
                width: 100%;
                background: none;
                padding: 20px;
            }
            h1{
                font-size: 30px;
                letter-spacing: 0px;
            }
        }
        #html{
            cursor: pointer;
        }

    </style>
</head>
<body>
    <form action="plogin.php" method="post">
        <h1>PATIENT LOGIN</h1>
        <label>Enter Paitent ID (Email ID)<span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter Paitent Id" name="name" required> 

        <label>Password <span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter Password" name="age" required> 

        
        <input type="submit" name="plogin" value="SAVE & NEXT" id="button">
        
        
    </form>
</body>
</html>