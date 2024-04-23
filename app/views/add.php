<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Data Product</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form method="post" action="index.php">
        <label>Name:</label><br>
        <input type="text" name="title" class="form-control"><br>
        <label>Deskripsi:</label><br>
        <input type="text" name="deskripsi" class="form-control"><br>
        <label>stok:</label><br>
        <input type="number" name="stok" class="form-control"><br>
        <input type="submit" value="Add Book">
        <a  type="button" value="Kembali" href="index.php">Kembali</a>
    </form> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>