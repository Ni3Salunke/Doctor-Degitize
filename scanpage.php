<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacnner</title>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: black;
            color: white;
        }
        h1{
            text-align: center;
            margin-top: 50px;
            font-size: 40px;
        }
        h1::after{   
            content: "";
            height: 5px;
            width: 250px;
            background : linear-gradient(90deg, #3F5EFB 0%, #40f849);
            border-radius: 25px;
            display: block;
            margin: auto;
        }
        .scan{
            height: 500px;
            margin-top: 30px;
            padding: 10px;
        }
        .scan .left{
            width: 50%;
            height: 500px;
            float: right;
        }
        .scan .right{
            width: 50%;
            height: 500px;
        }
        *,
        *:before,
        *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        .file{
            margin-left: 35%;
        }
    </style>
</head>
<body>
    <h1>Scan Your Prescriotion</h1>
    <div class="scan">
        <div class="left">
            
        </div>
        <div class="right">
            <label class="file">
                <input type="file" id="file" aria-label="File browser example">
                <span class="file-custom"></span>
              </label>
        </div>
    </div>
</body>
</html>