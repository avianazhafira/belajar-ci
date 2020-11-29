<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Buat Halaman</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <form action="<?=base_url('admin/halamans/store');?>" method="post">
                    <div class="form-group">
                        <label for="judulhalaman">Judul Halaman </label>
                        <input type="text" name="judulhalaman" class="form-control" id="judulhalaman" placeholder="Masukin Judul Halaman">
                    </div>
                    <div class="form-group">
                        <label for="author">Author </label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Masukin Author">
                    </div>
                    <div class="form-group">
                        <label for="tglposting">Tgl Posting </label>
                        <input type="date" name="tglposting" class="form-control" id="tglposting" placeholder="Masukin TglPosting">
                    </div>
                    <div class="form-group">
                        <label for="isihalaman">Isi Halaman </label>
                        <input type="text" name="isihalaman" class="form-control" id="isihalaman" placeholder="Masukin Isi halaman">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success"> Submit </button>  
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>