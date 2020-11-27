<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">Logo</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="users">Master User</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="beritas">Master Berita</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="halaman">Master Halaman</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/login/logout/'); ?>">Logout</a>
        </li>
    </ul>
    </nav>
    <h2>Dashboard </h2>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>