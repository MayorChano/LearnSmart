<!doctype html>
<html lang="en">
      
<?php
session_start();
include('../../main/database/access_control.php');
include('../../main/head.php');
include('../../main/navbar.php');
if ($access_control['logged_in'] == "no")
{
  header('location:../index.php');
}
?>
<body>

<div class="container main my-3"> <!-- open container -->
    <main role="main">
        <div class="container main">
            <div class="row">
                <form action="edit.php" method="POST">
                    <?php
                        $emailToEdit = $access_control['email']; 
                        $_SESSION['emailToEdit'] = $emailToEdit;           
                    ?>
                    <div class="form-group">
                        <label for="username">Username - I recommend you don't change this.</label>
                        <input type="username" name="username" class="form-control" id="username1" placeholder="<?php echo $access_control['username']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
</div>


<?php
include('../main/footer.php');
?>

</body>

</html>