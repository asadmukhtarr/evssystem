<?php include('./includes/header.php'); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card rounded-0">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password </label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Confirm Password </label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Date of birth </label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Gender</label> <br />
                            Male
                            <input type="radio" name="gender" />
                            Female
                            <input type="radio" name="gender" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger float-end rounded-0">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('./includes/footer.php'); ?>


