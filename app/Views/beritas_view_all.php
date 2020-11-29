<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>List Berita</title>
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
        <a href="<?= base_url('admin/beritas/create') ?>" class="btn btn-success mb-2">Create</a>
        <h2> List Berita </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tabelBerita">
                    <thead>
                        <tr>
                            <th>ID Berita</td>
                            <th>Judul Berita</td>
                            <th>Author</td>
                            <th>Tgl Posting</td>
                            <th>Foto</td>
                            <th>Isi Berita</td>
                            <th> Action </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   if($beritas): 
                                    foreach($beritas as $news): ?>
                                    <tr>
                                        <td><?= $news['id']; ?></td>
                                        <td><?= $news['judulberita']; ?></td>
                                        <td><?= $news['author']; ?></td>
                                        <td><?= $news['tglposting']; ?></td>
                                        <td><?= $news['foto']; ?></td>
                                        <td><?= $news['isiberita']; ?></td>
                                        <td>
                                        <a href="<?= base_url('admin/beritas/edit/'.$news['id']); ?>" class="btn btn-success">
                                        Edit
                                        </a>
                                        <a href="<?= base_url('admin/beritas/delete/'.$news['id']); ?>" class="btn btn-danger">
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function (){
            $('#tabelBerita').DataTable();
        });
    </script>
</body>
</html>