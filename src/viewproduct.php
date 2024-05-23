  <?php
    require "./header.php";
    require_once "./db_connection.php";
    ?>

  <section id="viewProduct ">
      <div class="text-center text-2xl bg-green-200 font-bold py-2">
          View Product
      </div>
      <div class="w-full lg:w-3/4 mx-auto py-10">
          <table class="w-full ">
              <tr>
                  <th class="border py-2">sl.</th>
                  <th class="border py-2">Image</th>
                  <th class="border py-2">Product Name</th>
                  <th class="border py-2">Product Price</th>
                  <th class="border py-2">Action</th>
              </tr>
              <?php
                $sqliQuery = "SELECT * FROM `productinfo` WHERE 1";
                $result = mysqli_query($conn, $sqliQuery);

                // counter name is provide sl no every data

               $counter=0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $counter++;
                ?>
                <!-- here we start a new php tag but incude here our main table tructure -->
                <!-- also here we customise our style like image size,position ect -->
                <!-- add php tag in code where i need to show my data base -->
                  <tr>
                      <td class="border text-center px-2 py-2"><?php echo  $counter ;?></td>
                      <td style="display: flex; justify-content:center"    class="border text-center px-2 py-2">
                        <img src="./image/<?php echo $row["image"];?>" style="    width: 100px; height: 80px; " alt="">
                      </td>
                      <td class="border px-2 py-2"><?php echo$row["name"];?></td>
                      <td class="border text-center px-2 py-2"><?php echo$row["price"];?></td>
                      <td class="border text-center px-2 py-2">
                      <a href="./editenew.php?id=<?php echo $row["id"];?>">Edit</a>
                          /
                          <a href="./deleteproduct.php?id=<?php echo $row["id"];?>">Delete</a>
                      </td>
                  </tr>

              <?php
                }
                ?>


          </table>
      </div>

  </section>