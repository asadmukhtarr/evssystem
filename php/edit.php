<?php 
    include('./includes/header.php'); 
    $id = $_GET['id']; // id ...
    include('./actions/cn.php'); // connection ...
    $query = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($cn,$query) or die('cant run query');
    $row = mysqli_fetch_array($result);
?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
              <div class="mt-1 mb-1">
                  <?php include('includes/flash.php'); // flash message .. ?>
              </div>
                <div class="card rounded-0">
                    <div class="card-header">
                        <i class="fa fa-user-plus"></i> Edit Here
                    </div>
                    <div class="card-body">
                        <form action="actions/update.php?id=<?php echo $row['id']; ?>" method="POST"> 
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i> Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="dob"><i class="fa fa-calendar"></i> Date of Birth</label>
                                <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="gender"><i class="fa fa-venus-mars"></i> Gender</label> <br />
                                <i class="fa fa-mars"></i> Male
                                <input type="radio" name="gender" value="male" required <?php if($row['gender'] == "male") { echo 'checked'; } ?> />
                                <i class="fa fa-venus"></i> Female
                                <input type="radio" name="gender" value="female" required <?php if($row['gender'] == "female") { echo 'checked'; } ?> />
                            </div>
                            <button type="submit" class="btn btn-success float-end rounded-0 mt-2">
                                <i class="fa fa-save"></i> Update
                            </button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php include('./includes/footer.php'); ?>
