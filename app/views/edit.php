<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="post" action="edit.php?id=<?php echo $row['id']; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control"><br>

        <label>Deskripsi:</label><br>
        <input type="text" name="deskripsi" value="<?php echo $row['deskripsi']; ?>" class="form-control"><br>

        <label>Stok:</label><br>
        <input type="text" name="stok" value="<?php echo $row['stok']; ?>" class="form-control"><br>
        
        <input type="submit" value="Update Product">
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>