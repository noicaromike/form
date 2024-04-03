<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/dashboard.php'; ?>

<div class="dash-content">

    <div class="users-create">
        <div class="card">
            <div class="card-title">
                Create account
            </div>
            <div class="sub-title">
                quick and easy.
            </div>
            <form action="" method="POST">
                <div class="form-item">
                    <input type="text" class="form-input" placeholder="First name" name="firstname" value="">
                    <span class="form-error">

                    </span>
                </div>
                <div class="form-item">
                    <input type="text" class="form-input" placeholder="Last name" name="lastname" value="">
                    <span class="form-error">

                    </span>
                </div>
                <div class="form-item">
                    <select name="role" id="" class="form-input select">
                        <option disabled selected>Choose Role</option>
                        <option value="">Admin</option>
                        <option value="">Staff</option>
                    </select>
                    <span class="form-error">

                    </span>
                </div>
                <div class="form-item">
                    <input type="text" class="form-input" placeholder="Username" name="username" value="">
                    <span class="form-error">

                    </span>
                </div>
                <div class="form-item">
                    <input type="password" class="form-input" placeholder="Password" name="password">
                    <span class="form-error">

                    </span>
                </div>
                <div class="form-item">
                    <button class="form-btn" type="submit">Register</button>
                </div>

            </form>

        </div>
    </div>

</div>

<?php require APPROOT . '/views/includes/dash-footer.php'; ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>