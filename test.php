<?php
include('includes/header2.php');
include('includes/navbar.php');
include('admin/database/dbconfig.php');
?>

<?php

if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $query = "SELECT * FROM cards WHERE id = '$id'";
    $query_run=mysqli_query($connection,$query);
    $row=mysqli_num_rows($query_run);

}
?>




<section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
    <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="thumbs">
            <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>

              <a class="thumb-image active" href="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025" data-index="0">
                <span><?php echo '<img src="admin/upload/'.$row['images'].'" >'?></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_1024x1024.jpg?v=1447104179" data-index="1">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_150x150.jpg?v=1447104179" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_1024x1024.jpg?v=1447104180" data-index="2">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_150x150.jpg?v=1447104180" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
              <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_1024x1024.jpg?v=1447104182" data-index="3">
                <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_150x150.jpg?v=1447104182" alt="Tommy Hilfiger T-Shirt New York"></span>
              </a>
            </div>
            <div class="big">
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025')" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
              <div id="banner-gallery" class="swipe">
                <div class="swipe-wrap">
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                  <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                </div>
              </div>
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name"><?php echo $row['product_name'];?></h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="USD">
              <link itemprop="availability" href="https://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                <?php echo $row['price'];?>
                </div>
                <a>Free shipping</a>
              </div>
              <div class="swatches">
                <div class="swatch clearfix" data-option-index="0">
                  <div class="header">Size</div>
                  <div data-value="M" class="swatch-element plain m available">
                    <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                    <label for="swatch-0-m">
                      M
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="L" class="swatch-element plain l available">
                    <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                    <label for="swatch-0-l">
                      L
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XL" class="swatch-element plain xl available">
                    <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                    <label for="swatch-0-xl">
                      XL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XXL" class="swatch-element plain xxl available">
                    <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                    <label for="swatch-0-xxl">
                      XXL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                </div>
                <div class="swatch clearfix" data-option-index="1">
                  <div class="header">Color</div>
                  <div data-value="Blue" class="swatch-element color blue available">
                    <div class="tooltip">Blue</div>
                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                    <label for="swatch-1-blue" style="border-color: blue;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: blue;"></span>
                    </label>
                  </div>
                  <div data-value="Red" class="swatch-element color red available">
                    <div class="tooltip">Red</div>
                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                    <label for="swatch-1-red" style="border-color: red;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: red;"></span>
                    </label>
                  </div>
                  <div data-value="Yellow" class="swatch-element color yellow available">
                    <div class="tooltip">Yellow</div>
                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                    <label for="swatch-1-yellow" style="border-color: yellow;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                      <span style="background-color: yellow;"></span>
                    </label>
                  </div>
                </div>
                <div class="guide">
                  <a>Size guide</a>
                </div>
              </div>
              <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
              <form id="AddToCartForm">
                <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                  <option  selected="selected"  data-sku="" value="7924994501">
                    M / Blue - $800.00 USD
                  </option>
                  <option  data-sku="" value="7924995077">
                    M / Red - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994437">
                    L / Blue - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994693">
                    L / Yellow - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924995013">
                    L / Red - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924994373">
                    XL / Blue - $900.00 USD
                  </option>
                  <option  data-sku="" value="7924994629">
                    XL / Yellow - $850.00 USD
                  </option>
                  <option  data-sku="" value="7924830021">
                    XXL / Blue - $950.00 USD
                  </option>
                  <option  data-sku="" value="7924994885">
                    XXL / Red - $850.00 USD
                  </option>
                </select>
                <div class="btn-and-quantity-wrap">
                  <div class="btn-and-quantity">
                    <div class="spinner">
                      <span class="btn minus" data-id="2721888517"></span>
                      <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                      <input type="hidden" id="product_id" name="product_id" value="2721888517">
                      <span class="q">Qty.</span>
                      <span class="btn plus" data-id="2721888517"></span>
                    </div>
                    <div id="AddToCart" quickbeam="add-to-cart">
                      <span id="AddToCartText">Add to Cart</span>
                    </div>
                  </div>
                </div>
              </form>
              <div class="tabs">
                <div class="tab-labels">
                  <span data-id="1" class="active">Info</span>
                  <span data-id="2">Brand</span>
                </div>
                <div class="tab-slides">
                  <div id="tab-slide-1" itemprop="description"  class="slide active">
                  <?php echo $row['description'];?>
                  </div>
                  <div id="tab-slide-2" class="slide">
                    Tony Hunfinger
                  </div>
                </div>
              </div>
              <div class="social-sharing-btn-wrapper">
                <span id="social_sharing_btn">Share</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
                        }

                        }
                         else
                        {
                        echo "No REcord Found";
                         }
                
               ?>  


    <aside class="related">
      <div class="_cont">
        <h2>You might also like</h2>
        <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
        <?php
               include('admin/database/dbconfig.php');
               $query="SELECT * FROM cards";
               $query_run= mysqli_query($connection,$query);

               if(mysqli_num_rows($query_run)>0)
               {
                 
               foreach($query_run as $row){
                ?>

          <a class="product-box">
            <span class="img">
              <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_70d2887b-ec6a-4bcb-a93b-7fd1783e6445_grande.jpg?v=1447530130')" class="i first"></span>
              <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
            </span>
            <span class="text">
              <strong> <?php echo $row['product_name'];?></strong>
              <span>
              <?php echo $row['price'];?>
              </span>
              <div class="variants">
                <div class="variant">
                  <div class="var m available">
                    <div class="t">M</div>
                  </div>
                  <div class="var l available">
                    <div class="t">L</div>
                  </div>
                  <div class="var xl available">
                    <div class="t">XL</div>
                  </div>
                  <div class="var xxl available">
                    <div class="t">XXL</div>
                  </div>
                </div>
                <div class="variant">
                  <div class="var color blue available">
                    <div class="c" style="background-color: blue;"></div>
                  </div>
                  <div class="var color red available">
                    <div class="c" style="background-color: red;"></div>
                  </div>
                  <div class="var color yellow available">
                    <div class="c" style="background-color: yellow;"></div>
                  </div>
                </div>
              </div>
            </span>
          </a>
          <?php
                }
               }
               else
               {
                echo "not record found";
               }
              
              ?>

         
               
       
        <div class="more-products" id="more-products-wrap">
          <span id="more-products" data-rows_per_page="1">More products</span>
        </div>
      </div>
    </aside>
  </div>

</section>





<?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>

 
 
