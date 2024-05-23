<?php
require "./header.php";
require_once "./db_connection.php";
if (isset($_REQUEST["id"]) || $_REQUEST["id"] == "") {
    // header("location: ./");
    // exit();
}
$deleteId = $_REQUEST["id"];
?>

<section id="deletedProduct">
    <div class="text-center text-2xl">
        Delete Product

    </div>
    <div>
        <?php
        $sqlQuery = "DELETE FROM `productinfo` WHERE `id`=\"$deleteId\"";
        mysqli_query($conn, $sqlQuery);
        echo "<script>alert('product is Deleted.')</script>";
        // header("location: ./viewproduct.php");
        // exit();

        ?>
    </div>
</section>
</body>

</html>