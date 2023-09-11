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

    background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-dark-green-block-leaf-line-background-picture-image_1279870.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    width: 20%;
    height: 50%;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
    border-radius:50px
  }
    
    .boy{
     background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-dark-green-block-leaf-line-background-picture-image_1279870.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    width: 100%;
    height: 100%;
    }

   </style>
  <div class="boy">
  <body>
    <h1 style="text-align:center; background-color:darkgrey;">Ayo Isi Formulir Registrasi Dibawah Ini</h1>
        <div class="container">
          <h1 style="text-align:center;background-color:bisque;">Registrasi</h1>
          <p>Ayo isi Data Registrasi Dibawah ini:</p>
          <br>
            <form action="connect_register.php" method="post" style="text-align:center;">
                <label><b>
                nama_pengguna
                </b></label>@<br>
                <input type="text" id="nama_pengguna" name="nama_pengguna"><br>
                <label><b>
                  email
                </br></label>#<br>
                <input type="text" id="email" name="email"><br>
                <label><b>
                  Password
                </br></label>?<br>
                <input type="text" id="password" name="password"><br>
                <label><b>
                  Nomor_HP
                </br></label>?<br>
                <input type="text" id="Nomor_HP" name=" Nomor_HP"><br>
                <label><b>
                  Alamat
                </br></label>?<br>
                <input type="text" id="alamat" name="alamat"><br>
                <label><b>
                 Username
                </b></label>?<br>
                <input type="text" id="username" name="username"><br>
                <br>
                <button>Registrasi</button>
            </form>
        </div>             
</body>
  </div>
</html>
