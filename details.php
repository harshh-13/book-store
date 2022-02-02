<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    
    <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/3330/premium/3330314.png?token=exp=1643774217~hmac=333513abba367fe7431b7b85e7376780">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <?php
            $conn=mysqli_connect("localhost","root","","book store");

            $tablename = $_POST["category"];

            if(!$conn)
                echo mysqli_connect_error();
            else {
                $que = "select bookid,booknm,price,author from ".$tablename.";";
                $res = mysqli_query($conn, $que);

                if(!$res)
                    echo mysqli_connect_error();
                else {
                    if(mysqli_num_rows($res) > 0) {
                        echo "<h3>".$_POST["category"]." Books</h3>";?>

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Author</th>
                            </tr>
                        <?php
                        while($row = mysqli_fetch_array($res)) {
                            echo "<tr><td>" . $row['bookid'] . "</td>";
                            echo "<td>" . $row['booknm'] . "</td>";
                            echo "<td>Rs." . $row['price'] . "</td>";
                            echo "<td>" . $row['author'] . "</td></tr>";
                        } ?>
                        </table> <?php
                    }
                    else
                        echo "No books in ".$_POST["category"]." category!";
                }
            }
        ?>
    </div>
</body>
</html>