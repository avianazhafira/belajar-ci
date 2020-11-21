<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <a href="<?=base_url('admin/users/create')?>" class="btn btn-success mb-2">Create </a>
        <h2>List User </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="listtable">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Nama </th>
                            <th>Email </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($users): 
                        ?>
                        <?php
                            foreach($users as $pengguna): 
                        ?>
                        <tr>
                            <td><?=$pengguna['id'];?></td>
                            <td><?=$pengguna['name'];?></td>
                            <td><?=$pengguna['email'];?></td>
                            <td>
                            <a href="<?=base_url('admin/users/edit/'.$pengguna['id']); ?>" class="btn btn-info"> Edit </a>
                            </td>
                            <td>
                            <a href="<?=base_url('admin/users/delete/'.$pengguna['id']); ?>" class="btn btn-danger">Delete </a>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        <?php
                            endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">  
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
</body>
</html>