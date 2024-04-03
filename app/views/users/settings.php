<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/dashboard.php'; ?>

<div class="dash-content">
    <div class="title">
        <i class="ri-dashboard-2-line"></i>
        <span class="text">Users</span>
    </div>
    <div class="add-btn">
        <a href="<?= URLROOT; ?>/users/create" class="link-btn">Create Account</a>
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Department</th>
            <th>Role</th>
            <th>Date created</th>
            <th>Action</th>
        </tr>

        <tr>
            <td data-cell="Name">asdasd</td>
            <td data-cell="Department">asdasd</td>
            <td data-cell="Role">asdasdasd</td>
            <td data-cell="Date created">asdasdasd</td>
            <td data-cell="Action">
                <div class="action-item">
                    <a href="" class="action-link green">
                        <i class="ri-edit-box-line"></i>
                    </a>
                    <a href="" class="action-link red">
                        <i class="ri-delete-bin-6-line"></i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td data-cell="Name">asdasd</td>
            <td data-cell="Department">asdasd</td>
            <td data-cell="Role">asdasdasd</td>
            <td data-cell="Date created">asdasdasd</td>
            <td data-cell="Action">
                <div class="action-item">
                    <a href="" class="action-link green">
                        <i class="ri-edit-box-line"></i>
                    </a>
                    <a href="" class="action-link red">
                        <i class="ri-delete-bin-6-line"></i>
                    </a>
                </div>
            </td>
        </tr>

    </table>
</div>


<?php require APPROOT . '/views/includes/dash-footer.php'; ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>