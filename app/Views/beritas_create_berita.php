<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <form action="<?=base_url('admin/beritas/store');?>" method="post">
                    <div class="form-group">
                        <label for="judulberita">Judul Berita </label>
                        <input type="text" name="judulberita" class="form-control" id="judulberita" placeholder="Masukin judulberita">
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
                        <label for="foto">Foto </label>
                        <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukin Foto">
                    </div>
                    <div class="form-group">
                        <label for="isiberita">Isi Berita </label>
                        <input type="text" name="isiberita" class="form-control" id="isiberita" placeholder="Masukin Isi Berita">
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