<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="<?= URLROOT; ?>/public/img/eacmed.jpg" alt="">
        </div>

        <span class="logo_name">Eacmed</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="<?= URLROOT; ?>/users/dashboard">
                    <i class="ri-home-line"></i>
                    <span class="link-name">Dahsboard</span>
                </a>
            </li>
            <li><a href="#">
                    <i class="ri-file-edit-line"></i>
                    <span class="link-name">Create Form</span>
                </a>
            </li>
            <li><a href="#">
                    <i class="ri-file-text-line"></i>
                    <span class="link-name">History Record</span>
                </a>
            </li>
            <li><a href="<?= URLROOT; ?>/users/settings">
                    <i class="ri-team-line"></i>
                    <span class="link-name">Users</span>
                </a>
            </li>

        </ul>

        <ul class="logout-mode">
            <li><a href="#">
                    <i class="ri-logout-circle-line"></i>
                    <span class="link-name">Logout</span>
                </a></li>

            <li class="mode">
                <a href="#">
                    <i class="ri-moon-line"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section class="dashboard">
    <div class="top">
        <i class="ri-menu-line sidebar-toggle"></i>


        <div class="search-box">
            <i class="ri-search-line"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <img src="<?= URLROOT; ?>/public/img/profile.jpg" alt="">
    </div>