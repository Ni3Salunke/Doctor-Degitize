
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>वैद्य</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" type="image/x-icon" href="logo.png">


</head>
<body>
    <form action="Index.php" method="post">
        <h1>DOCTOR LOGIN </h1>
        <img src="logo.png" alt="">

        <label> &nbsp &nbsp &nbsp Enter Username(IMRN)<span style="color: red;">*</span></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label> &nbsp &nbsp &nbsp Enter Password<span style="color: red;">*</span></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <input type="submit" value="LOGIN" id="button">

    <div class="a">
        <a href="dr_registration.php"  id="left">New Registration?</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    </form>
</body>
</html>