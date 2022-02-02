<?php
    $category = $_POST["category"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    
    <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/3330/premium/3330314.png?token=exp=1643774217~hmac=333513abba367fe7431b7b85e7376780">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mb-3 mt-3">
        <form action="dbfile.php" method="post">
            <input type="hidden" name="category" value="<?php echo $category ?>"/>

            <label class="form-label">Bookid</label>
            <input class="form-control" type="text" name="bookid"/>

            <label class="form-label">Book Name</label>
            <input class="form-control"  type="text" name="booknm"/>

            <label class="form-label">Price</label>
            <input class="form-control"  type="number" name="price"/>

            <label class="form-label">Rackno</label>
            <input class="form-control"  type="text" name="rackno"/>

            <label class="form-label">Author</label>
            <input class="form-control"  type="text" name="author"/>

            <label class="form-label">ISBN</label>
            <input class="form-control"  type="text" name="isbn"/>

            <label class="form-label">Edition</label>
            <input class="form-control"  type="text" name="editn"/><br/>

            <input class="form-control btn-primary" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>