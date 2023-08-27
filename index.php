<?php
session_start();
if (isset($_SESSION['login'])) {
  header("location:home.php");
}
?>
<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-primary-subtle">


  <form action="process.php" method="post" class="vh-100 gradient-custom container py-5 h-100  col-12 col-md-8 col-lg-6 col-xl-5 card bg-dark text-white card-body p-5 text-center mb-md-5 mt-md-4 pb-5"
  style="border-radius: 1rem; bs-border-opacity: .5;"
    >
    <div class="alert">
    <?php
    //check for email if it is empty
    ?>
    </div>
      <?php  
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
          ?>
          <div class="alert alert-danger" role="alert">
            <?php echo " Email or Password may be incorrect."; ?>
          </div>
        <?php } elseif ($_GET['error'] == 2) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo " You are not authorized to that page."; ?>
          </div>
        <?php } elseif ($_GET['error'] == 3) { ?>
          <div class="alert alert-success" role="alert">
            <?php echo "You are logged out successfully!"; ?>
          </div>
        <?php }elseif($_GET['error']==4){?>
        <div class="alert alert-danger" role="alert">
          <?php echo "Please Enter Email";?>
        </div>
      <?php } elseif($_GET['error']==5){?>
      <div class="alert alert-danger" role="alert">
        <?php echo "Please Enter Password";?>
        </div>
      <?php }

      }
      ?>
    </div>

    <div class="imgcontainer">
      <h1 align="center" class="fw-bold mb-2 text-uppercase">Login</h1>
      <p class="text-white-50 mb-5">Please enter your login and password!</p>

    </div>

    <div class="container">
      <div class="form-outline form-white mb-4">
        <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
        <label class="form-label" for="typeEmailX">Email</label>
      </div>

      <div class="form-outline form-white mb-4">
        <input name="psw" type="password" id="typePasswordX" class="form-control form-control-lg" />
        <label class="form-label" for="typePasswordX">Password</label>
      </div>
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

      <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

    </div>

  </form>
</body>

</html>