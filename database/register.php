<html>
<head>
    <title>Membuat Form Pendaftaran Registrasi Dengan PHP MySQL</title>    
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

    .boy{
     background-image: url("https://www.wallpapers13.com/wp-content/uploads/2016/04/Landscape-sunrise-Indonesia-Stratovolcano-Java-Mount-Bromo-HD-Wallpaper.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    width: 100%;
    height: 100%;
    }
   </style>
  <div class="boy">
  <body>
        <div class="container">
          <h1>Registrasi</h1>
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
                <button>Registrasi</button>
            </form>
        </div>             
</body>
  </div>
</html>
