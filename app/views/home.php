<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="container">
    <div class="login-content">
        <form action="" method="post" class="login">
            <div class="card">
                <h1>Login Account</h1>
                <div class="form-item">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-input " placeholder="Enter username">
                    <span class="form-error"></span>
                </div>
                <div class="form-item">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-input " placeholder="Enter password">
                    <span class="form-error"></span>
                </div>
                <div class="form-item">
                    <button type="submit" class="form-btn">Login</button>
                </div>
            </div>

        </form>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>