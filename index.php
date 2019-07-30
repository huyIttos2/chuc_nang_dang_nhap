<!doctype html>
<html>
<head>
    <title>Đăng kí</title>
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "admin" && $password =="admin"){
            echo "<h1>Welcome to website ".$username."</h1>";
        }else{
            echo "<h1>Login Error</h1>";
        }
    }
    ?>
<div class="to">
    <form class="form" method="post">
            <h2>Login PHP</h2>
            <i class="fab fa-app-store-ios"></i>
            <label style="margin-left: -150px;">User name</label>
            <input type="text" name="username" />
            <label>Password</label>
            <input type="text" name="password" />
            <input id="submit" type="submit" name="submit" value="Gửi">
    </form>
</div>



</body>
</html>