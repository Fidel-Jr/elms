<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/btstrp/bootstrap.min.css">
    <script src="./styles/btstrp/bootstrap.bundle.min.js"></script>

    <!-- TYPEWRITER JS -->
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <style>
      body{
        background-color: #e9ecef;
      }
      input[type='text']{
        width: 350px !important;
        height: 50px;
      }
      input[type='password']{
        width: 350px !important;
        height: 50px;
      }
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container p-2">
      <a class="navbar-brand" href="#">ELMS</a>
      <a href="./admin/index.php" style="text-decoration: none;">Admin</a>
    </div>
  </nav>
  
  <div class="container">
    <div class="row" style="width: fit-content;">
        <div class="col mt-3">
            <img src="./includes/images/no-bg.png" alt="">
        </div>
        <div class="col border bg-white p-4 mt-5 shadow" style="border-radius: 15px; height: fit-content;">
            <h4 class="text-primary text-center mt-2 mb-5">Welcome to <span id="app" style="color: rgba(14, 60, 100, 0.953); font-weight: bold;">ElmsPortal</span></h4>
            <form action="">
                <input type="text" placeholder="Email Address" class="form-control mb-4">
                <input type="password" name="" id="" placeholder="Password" class="form-control">
                <input type="checkbox" name="" id="" class="mt-4">
                <label for="">Remember Me</label>
                <a href="" style="text-decoration: none;"><p class="text-secondary mt-3" style="font-size: 18px;">Forgot Password</p></a>
                <input type="submit" value="Sign In" class="btn btn-primary mb-3 form-control" style="padding: 12px 15px;border-radius: 3   px;">
            </form>
        </div>
    </div>
  </div>
    
  <script>
    var app = document.getElementById('app');

    var typewriter = new Typewriter(app, {
        loop: true
    });

    typewriter.typeString('ElmsPortal')
        .pauseFor(2500)
        .deleteAll()
        .start();
  </script>
    

</body>
</html>