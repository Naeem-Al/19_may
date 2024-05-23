<!-- <?php
require "./header.php";
require_once "./db_connection.php";



// get the product from url
=$REQUEST[""];

$sqlQuery="SELECT * FROM `productinfo` WHERE 1";
$result=$mysqli_query($conn, $sqlQuery);
$product =mysqli_fetch_assoc($result);

if ($_server["REQUEST_METHOD"] == "POST"){
    $productName=$_POST['prodName'];
    $productprice=$_post["productprice"];
    if(!empty($_FILES["prodImage"]["name"])){
        $imageDir="./";
        $imageFileType=data("d-m-y-h-i-s") . "." . pathinfo($FILES["prodImage"]["name"],PATHINFO_EXTENSION);
        $imageFullpath=$imageDir.$imageFiletype;
        move_uploaded_file($_FILES["prodImage"]["tmp_name"],$imageFullPath);

    }
    else{
        $imagefileType=$product[`image`];
    }
    $updateQuery="UPDATE `productinfo` SET `image`='[value-2]',`name`='[value-3]',`price`='[value-4]' WHERE `id`=;
    if(mysqli_query($conn,  $updateQuery)){
        echo "product updated succesful";
        header("location: ./);
        exit();
        else{
            echo "error updating product : .mysqli_error($conn);

        }
        header{
            header
        }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="editProduct">
      <div class="text-center text-2xl bg-slate-200 font-bold py-2">
          Edit Product
      </div>
      <div class="w-full lg:w-3/4 mx-auto py-10">
          <form method="POST" action="" enctype="multipart/form-data">
              <div class="flex flex-wrap items-center my-1">
                  <label for="prodImage" class="w-1/3 text-right pr-10"> Product Image</label>
                  <input type="file" name="prodImage" id="prodImage" placeholder="Image" class="w-2/3 px-3 py-1 text-md border" />
              </div>
              <div class="flex flex-wrap items-center my-1">
                  <label for="prodName" class="w-1/3 text-right pr-10"> Product Name</label>
                  <input type="text" name="prodName" id="prodName" placeholder="Enter Product Name" class="w-2/3 px-3 py-1 text-md border" />
              </div>
              <div class="flex flex-wrap items-center my-1">
                  <label for="prodPrice" class="w-1/3 text-right pr-10"> Product Price</label>
                  <input type="text" name="prodPrice" id="prodPrice" placeholder="Product Price" class="w-2/3 px-3 py-1 text-md border" />
              </div>
              <div class="text-center my-4">
                  <button name="submit" type="submit"  class="border-2 bg-green-400 hover:bg-green-700 text-gray-800 hover:text-red-100 duration-300 font-semibold rounded-2xl px-3 py-2">Add Product</button>
              </div>
          </form>
      </div>

  </section>
</body>
</html> -->