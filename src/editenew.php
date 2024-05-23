<?php
require "./header.php";
require_once "./db_connection.php";

  if(!isset($_REQUEST["id"]) || $_REQUEST["id"] ==""){
    header("location: ./");
    exit();
  }

$editProduct = $_REQUEST["id"];
$sqll = "SELECT `image`, `name`, `price`  FROM `productinfo` WHERE `id`=\"$editProduct\"";
$result = mysqli_query($conn, $sqll);
$prod = mysqli_fetch_assoc($result);


if (isset($_REQUEST["updateProd"])) {
    $prodName = $_REQUEST["prodName"];
    $prodPrice = $_REQUEST["prodPrice"];

    $query = "UPDATE `productinfo` SET `name`='$prodName',`price`='$prodPrice' WHERE `id`=\"$editProduct\"";
    mysqli_query($conn, $query);
    header("location: ./viewproduct.php");
    exit();
}
?>




<!-- end -->

<section id="addProduct">
    <div class="text-center text-2xl bg-slate-200 font-bold py-2">
        Edit Product
    </div>
    <div class="w-full lg:w-3/4 mx-auto py-10">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="flex flex-wrap items-center my-1">
                <img src="./image<?php echo $prod["image"]; ?>" alt="product image" class="mx-auto">
            </div>
            <div class="flex flex-wrap items-center my-1">
                <label for="prodName" class="w-1/3 text-right pr-10"> Product Name</label>
                <input type="text" name="prodName" id="prodName" placeholder="Enter Product Name" value="<?php echo $prod["name"]; ?>" class="w-2/3 px-3 py-1 text-md border" />
            </div>
            <div class="flex flex-wrap items-center my-1">
                <label for="prodPrice" class="w-1/3 text-right pr-10"> Product Price</label>
                <input type="text" name="prodPrice" id="prodPrice" placeholder="Product Price" value="<?php echo $prod["price"]; ?>" class=" w-2/3 px-3 py-1 text-md border" />
            </div>
            <div class="text-center my-4">
                <button name="updateProd" type="submit" class="border-2 bg-green-400 hover:bg-green-700 text-gray-800 hover:text-red-100 duration-300 font-semibold rounded-2xl px-3 py-2">Update Product</button>
            </div>
        </form>
    </div>

</section>

</body>

</html>