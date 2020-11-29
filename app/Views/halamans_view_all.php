<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>List Halaman</title>
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
        <a href="<?= base_url('admin/halamans/create') ?>" class="btn btn-success mb-2">Create</a>
        <h2> List Halaman </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tabelUser">
                    <thead>
                        <tr>
                            <th>ID Halaman</td>
                            <th>Judul Halaman</td>
                            <th>Author</td>
                            <th>Tgl Posting</td>
                            <th>Isi Halaman</td>
                            <th>Action </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   if($halamans): 
                                    foreach($halamans as $pages): ?>
                                    <tr>
                                        <td><?= $pages['id']; ?></td>
                                        <td><?= $pages['judulhalaman']; ?></td>
                                        <td><?= $pages['author']; ?></td>
                                        <td><?= $pages['tglposting']; ?></td>
                                        <td><?= $pages['isihalaman']; ?></td>
                                        <td>
                                        <a href="<?= base_url('admin/halamans/edit/'.$pages['id']); ?>" class="btn btn-success">
                                        Edit
                                        </a>
                                        <a href="<?= base_url('admin/halamans/delete/'.$pages['id']); ?>" class="btn btn-danger">
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