<?php include('./includes/header.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="mt-1 mb-1">
                  <?php include('includes/flash.php'); // flash message .. ?>
                </div>
                <div class="card rounded-0">
                    <div class="card-header">
                        <i class="fa fa-sign-in"></i> Login Here
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for=""><i class="fa fa-lock"></i> Password </label>
                            <input type="password" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger float-end rounded-0">
                            <i class="fa fa-sign-in"></i> Login
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('./includes/footer.php'); ?>
