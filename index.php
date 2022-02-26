<?php 
//koneksi
$db = mysqli_connect("localhost", "root", "", "dataasuransi");
//ambil data
$result = mysqli_query($db, "SELECT * FROM user");
?>


<?php
while ($row = mysqli_fetch_assoc($result)) {

if(isset($_POST["submit"]) ){

  if($_POST["username"]== $row["email"]&& 
    $_POST["password"]== $row["pass"])
    {
    header("location: admin.php");
  }else{
    $error=true;
  }
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img id="img-top" src="image/logo.png " alt="" width="70" height="70" class="d-inline-block align-text-center">
          Life Asurance
        </a>
      </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <img src="image/people.png" alt="">
            </div>
            <div class="col-4">
              <form action="" method="post">
                <div class="row text-center mb-3">
                    <div>
                      <p id ="login">Login</p>
                    </div>
                    <div class="mb-3">
                        <label for="Username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" value="submit" class="btn btn-primary" name="submit">Login</button>
                </div>
                <br>
                <div  class = "row text-center">
                <a class = "daftar" href="daftar.html" target="_blank">Sign Up!</a>
                </div>
                <br>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                   <div> Username/Password Salah!
                    </div>
                  </div>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
        <footer class="text-center pb-2 fixed-bottom" style="background-color: lightgray">
          <p class="footer"> 
            <br> Created With <i class="bi bi-heart-fill text-danger"></i> <a href="https://www.instagram.com/andikabhyngkr/" class="text-black fw-bold" target="_blank">Andika</a>
          </p>
        </footer> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>