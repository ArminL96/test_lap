<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">LAP Kurs</a>
        <ul class="navbar-nav flex-row">
            
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
            </li>

            <?php
            session_start();

            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                if ($_SESSION["is_admin"] === true) {
                    echo '
                    <li class="nav-item">
                        <a class="nav-link text-white" href="private/pages/adminpanel.php">Adminpanel</a>
                    </li>';
                }
                
                echo '
                <li class="nav-item">
                    <a class="nav-link text-white" href="private/pages/Logout.php">Logout</a>
                </li>';
            } else {
                echo '<li class="nav-item">
                        <a class="nav-link text-white" href="private/pages/Login.php">Login</a>
                    </li>';
            }
            ?>
        </ul>
    </div>
</nav>
