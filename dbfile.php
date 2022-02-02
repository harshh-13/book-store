<?php 
    $conn = mysqli_connect("localhost","root","","book store");
    
    $tablename = $_POST["category"];
    
    $id = $_POST["bookid"];
    $name = $_POST["booknm"];
    $price = $_POST["price"];
    $rackno = $_POST["rackno"];
    $author = $_POST["author"];
    $isbn = $_POST["isbn"];
    $edition = $_POST["editn"];

    if(!$conn)
        echo mysqli_connect_error();
    else {
        if(strlen($name)>5) {            
            $que = "insert into ".$tablename." values('".$id."','".$name."','".$price."','".$rackno."','".$author."','".$isbn."','".$edition."')";

            $res=mysqli_query($conn, $que);
            
            if(!$res)
                echo "Insertion failed!";
            else
                echo "Book details stored successfully :)";
        }
        else
            echo "Length of book name should be greater than 5! Try again :)";
    }
?>