<?php include('./includes/header.php'); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <?php if(!empty($_GET['warning'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Warning!</strong> <?php echo $_GET['warning']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <div class="card rounded-0">
                    <div class="card-header">
                        <i class="fa fa-user-plus"></i> Register Here
                    </div>
                    <div class="card-body">
                        <form action="actions/register.php" method="POST"> 
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i> Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password"><i class="fa fa-lock"></i> Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="confirm_password"><i class="fa fa-lock"></i> Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="dob"><i class="fa fa-calendar"></i> Date of Birth</label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="gender"><i class="fa fa-venus-mars"></i> Gender</label> <br />
                                <i class="fa fa-mars"></i> Male
                                <input type="radio" name="gender" value="male" required />
                                <i class="fa fa-venus"></i> Female
                                <input type="radio" name="gender" value="female" required />
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger float-end rounded-0">
                                    <i class="fa fa-user-plus"></i> Register
                                </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php include('./includes/footer.php'); ?>
