<nav class="navbar navbar-expand-lg">
    <div class="container-fluid logo">
        <a class="navbar-brand p-1 fw-bolder" href="driver.php">
            <a href="driver.php"><img src="assets/gercep.png" height="50"/></a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $driver; ?>" aria-current="page" href="driver.php">Driver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $kendaraan; ?>" href="kendaraan.php">Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3 <?= $rute; ?>" href="rute.php">Rute</a>
                </li>
            </ul>
            <div class="btn-group me-4">
                <a href="logout.php" class="btn btn-info">
                    <i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout
                </a>
            </div>
        </div>
    </div>
</nav>