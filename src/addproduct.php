<?php
  require "./header.php";
  if(isset($_REQUEST["submit"])){
    $prodName=$_REQUEST["prodName"];
    $prodPrice=$_REQUEST["prodPrice"];
    // image path
    $imageDi="./image/";



    //  image uploading path

 $ImageName=date("Y_m_d_H_i_s").".".pathinfo($_FILES["prodImage"]["name"],PATHINFO_EXTENSION);
$imageFullPath=$imageDi . $ImageName;
move_uploaded_file($_FILES["prodImage"]["tmp_name"],$imageFullPath);

 }

  ?>

<section id="addProduct">
      <div class="text-center text-2xl bg-slate-200 font-bold py-2">
          Add Product
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
