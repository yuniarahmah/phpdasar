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

    
    background-image: url("https://c0.wallpaperflare.com/preview/82/862/490/malaysia-butterworth-pantai-bersih-sunset.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    width: 20%;
    height: 50%;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
    border-radius:50px
}

    body{
     background-image: url("https://wallup.net/wp-content/uploads/2016/06/23/396472-landscape-beach-coast.jpg");
     background-repeat: no-repeat;
     background-size:cover;
     }
   </style>
   <body>
   <p>

   <br>
    </p>
   <div class="container">
          <h1  style="text-align:center;">Login</h1>
            <form action="connect_login.php" method="post" style="text-align:center;">
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
                <button style="margin-left:90px;">Log In</button>
            </form>
        </div>             
</body>
    </body>
</html>
