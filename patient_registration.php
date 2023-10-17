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
    <form action="patient_regdb.php" method="post">
        <h1>PATIENT REGISTRATION</h1>
        <label>Enter Name <span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter Name" name="name" required> 
        
        <label>Sex <span style="color: red;">*</span></label>
        <div class="radio">
            <input type="radio" id="html" name="sex" value="Male" required>Male
            <input type="radio" id="html" name="sex" value="Female" required>Female
            <input type="radio" id="html" name="sex" value="Other" required>Other
        </div>

        <label>Enter Age <span style="color: red;">*</span></label>
        <input type="number" placeholder="Enter Age" name="age" required> 

        <label>Enter DOB <span style="color: red;">*</span></label>
        <input type="date" name="date" required> 

        <label>Enter Email<span style="color: red;">*</span></label>
        <input type="email" placeholder="Enter Email-id" name="email" required>

        <label>Enter Mobile No <span style="color: red;">*</span></label>
        <input type="tel" placeholder="Enter Mobile No" name="number" required> 

        <label>Enter Height in FT <span style="color: red;">*</span></label>
        <input type="number" placeholder="Enter Height" name="height" required>
         
        <label>Enter Weight in KG <span style="color: red;">*</span></label>
        <input type="number" placeholder="Enter Weight" name="weight" required> 

        <label>Enter Blood Pressure <span style="color: red;">*</span></label>
        <input type="number" placeholder="Enter Blood Pressure" name="bp" required> 

        <label>Enter Blood Group <span style="color: red;">*</span></label>
        <select id="status" name="bg" required>
        <option>Select</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
    </select>

        <label>Enter Patient Occupation <span style="color: red;">*</span></label>
        <select id="status" name="occ" required> 
            <option>Select</option>
            <option value="Farmer">Farmer</option>
            <option value="Businessman">Businessman</option>
            <option value="Bankar">Bankar</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Engineear">Engineear</option>
            <option value="Doctor">Doctor</option>
            <option value="Shafe">Shafe</option>
            <option value="Other">Other</option>
        </select>

        <label>Enter Password <span style="color: red;">*</span></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label>Confirm Your Password <span style="color: red;">*</span></label>
        <input type="password" placeholder="Confirm Your Password" name="cpassword" required>
    
        
        <input type="submit" name="submit" value="SAVE & NEXT" id="button">
         
    
        
        
    </form>
</body>
</html>