<?php
include('includes/header.php');
include('includes/navbar.php');
?>


  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
      <h1 class="my-4">Category</h1>
      <?php
               include('admin/database/dbconfig.php');
               
               $query="SELECT * FROM catagory";
               
               $query_run= mysqli_query($connection,$query);

               if(mysqli_num_rows($query_run)>0)
               {
                 
               foreach($query_run as $row){
                ?>

        
        <div class="list-group">
          <a href="cat_page.php?id=<?php echo $row['cat_id'];?>" class="list-group-item"><?php echo $row['cat_name'];?></a>
         
        </div>
        <?php
                }
               }
               else
               {
                echo "not record found";
               }
              
              ?>

      </div>
     
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/pic1.jpg" width="400px" height="100px" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/pic2.jpg" width="400px" height="100px" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/pic3.jpg" width="400px" height="100px" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
        <?php
               include('admin/database/dbconfig.php');
               $query="SELECT * FROM cards";
               $query_run= mysqli_query($connection,$query);

               if(mysqli_num_rows($query_run)>0)
               {
                 
               foreach($query_run as $row){
                ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="test.php?id=<?php echo $row['id'];?>"><?php echo '<img src="admin/upload/'.$row['images'].'" width="208px" height="119px">'?></a>
              <div class="card-body">
            
               


                <h4 class="card-title">
                  <a href="test.php?id=<?php echo $row['id'];?>"><?php echo $row['product_name'];?></a>
                </h4>
                <h5><?php echo $row['price'];?></h5>
                <p class="card-text"><?php echo $row['description'];?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            

            </div>
          </div>
          <?php
                }
               }
               else
               {
                echo "not record found";
               }
              
              ?>


        

        

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 












 <?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>











 