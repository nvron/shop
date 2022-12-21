<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="dropdown-item" href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                        

                    </li>
                    <li class="nav-item">
                    <a class="dropdown-item" href="<?php echo BASE_URL . '/admin/order'; ?>" class="text-gray-200 hover:text-white transition">Admin</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item"><a class="dropdown-item" href="login.php" class="text-gray-200 hover:text-white transition">Login</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="register.php" class="text-gray-200 hover:text-white transition">Register</a></li>
                <?php } ?>
            </ul>



            <form action="search.php" method="get" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <button class="btn btn-outline-dark">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
</nav>