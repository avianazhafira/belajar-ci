<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>List User</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">Aviana</a>
        
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
            <a class="nav-link" href="halamans">Master Halaman</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/login/logout/'); ?>">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <a href="<?= base_url('admin/users/create') ?>" class="btn btn-success mb-2">Create</a>
        <h2> List User </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tabelUser">
                    <thead>
                        <tr>
                            <th>ID</td>
                            <th>Nama</td>
                            <th>Email</td>
                            <th>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   if($users): 
                                    foreach($users as $pengguna): ?>
                                    <tr>
                                        <td><?= $pengguna['id']; ?></td>
                                        <td><?= $pengguna['name']; ?></td>
                                        <td><?= $pengguna['email']; ?></td>
                                        <td>
                                        <a href="<?= base_url('admin/users/edit/'.$pengguna['id']); ?>" class="btn btn-success">
                                        Edit
                                        </a>
                                        <a href="<?= base_url('admin/users/delete/'.$pengguna['id']); ?>" class="btn btn-danger">
                                        Delete
                                        </a>
                                        </td>
                                    </tr>
                        <?php       endforeach; 
                                endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">    
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
        $(document).ready( function (){
            $('#tabelUser').DataTable();
        });
    </script>
</body>
</html>