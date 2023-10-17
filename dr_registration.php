
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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
            width: 230px;
            background : linear-gradient(90deg, #40f849 0%, #3F5EFB);
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        form input{
            padding: 15px;
            margin: 10px;
            border-radius: 8px;
            font-size: large;
            border: 2px solid #40f849;
        }
        form #button{
            font-size: 20px;
            border: none;
            
            padding: 13px;
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
                color: white;
            }
        }
    </style>

</head>
<body>
    <form action="dr_regdb.php" method="post">
        <h1>NEW REGISTRATION</h1>

        <label> &nbsp &nbsp &nbsp Enter Your Name <span style="color: Blue;">*</span></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label> &nbsp &nbsp &nbsp Enter Email <span style="color: Blue;">*</span></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label> &nbsp &nbsp &nbsp Enter Aadhar Number <span style="color: Blue;">*</span></label>
        <input type="text" placeholder="Enter Aadhar Card Number" name="ano" required>

        <label> &nbsp &nbsp &nbsp Enter Pan Number <span style="color: Blue;">*</span></label>
        <input type="text" placeholder="Enter Pan Card Number" name="pno" required>

        <label>&nbsp &nbsp &nbsp Enter IMR Number <span style="color: Blue;">*</span></label>
        <input type="text" placeholder="Enter Certified Indian Medical Registration Number" name="ino" required>

        <label>&nbsp &nbsp &nbsp Enter Password <span style="color: Blue;">*</span></label>
        <input type="password" placeholder="Enter Password" name="passwordd" required>

        <label>&nbsp &nbsp &nbsp Confirm Password <span style="color: Blue;">*</span></label>
        <input type="password" placeholder="Confirm Password" name="password" required>
        
        <input type="submit" name="submits" value="REGISTER" id="button">

        
    </form>
</body>
</html>