<!doctype html>
<html>
<?php 
include("../main/head.php");
include('../main/database/access_control.php');
include('../main/navbar.php');
?>
<body>
<div class="container m-3 main"> <!-- open container -->

<form action="register_process.php" method="post">

  <div class="form-group">
    <label for="exampleInputUserName">User name</label>
    <input type="text" name="username" class="form-control" id="exampleInputUserName" aria-describedby="userNameHelp" placeholder="Please enter a username">
    <small id="userNameHelp" class="form-text text-muted">Please don't use a username which can identify you. But keep it appropriate, please.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter your email address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Please enter a password">
  </div>

  <button type="submit" class="btn btn-primary">Click here to register</button>
</form>


</div>  <!-- close container -->




    <!-- Please don't touch anything below this line -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

<?php
include('../main/footer.php');
?>

</html>
