<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="container">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"> Bukti Foto</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label"> Isi Laporan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Kirim5"> 
</div>
</body>
</html>