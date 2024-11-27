<?php include 'header.php'; ?>
<link href="assets/css/style.css" rel="stylesheet">
<div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <?php if (isset($error)) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>
    <form method="POST" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>


<?php include 'footer.php'; ?>
