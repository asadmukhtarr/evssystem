<?php 
    include('./includes/header.php'); 
    session_start();
    if(empty($_SESSION['user'])){
        header('Location:index.php');
    }
?>
    <div class="container mt-2">
        <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
    </div>
<?php include('./includes/footer.php'); ?>

