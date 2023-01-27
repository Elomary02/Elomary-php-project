<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->
<div class="col-md-12">
    <h3 class="text-center mb-5">Get connected to acess your profile !</h3>
</div>
<div class="col-md-5">
    <form method="" action="">
    <div class="mb-3">
        <label for="Pseudo" class="form-label">Pseudo : </label>
        <input type="text" class="form-control" id="Pseudo" aria-describedby="Pseudo" placeholder="Enter your pseudo">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-dark">Connection</button>
    </form>
</div>
<?php
    require_once("../inc/footer.php");
?>