<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="connect_login.php">
    </head>
   <style>
    .container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-image: url();
    background-repeat: no-repeat;
    background-size:cover;
    width: 20%;
    height: 50%;
    box-shadow: 0 0 10px rgba(255,255,255,.3);}

    .body{
     background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-summer-green-leaf-background-leaves-hd-leafliterarygreensimplebackgroundnaturalmakeupscosmetic-background-image_50136.jpg");
     background-repeat: no-repeat;
     background-size:cover;
     }
   </style>
   <body>
   <div class="container">
    <p>
    <a href ="register.php">MY HOME</a>
    </p>
          <h1>Login</h1>
            <form action="connect_register.php" method="post">
                <label><b>
                Username
                </b></label>@<br>
                <input type="text" id="username" name="username"><br>
                <label><b>
                email
                </b></label>#<br>
                <input type="text" id="email" name="email"><br>
                <label><b>
                Password
                </b></label>?<br>
                <input type="text" id="password" name="password"><br>
                <br>
                <button>Log In</button>
            </form>
        </div>             
</body>
    </body>
</html>
