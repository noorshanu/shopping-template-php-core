<?php
include('includes/header.php');
include('includes/navbar.php');
include('admin/database/dbconfig.php');
?>








 <div class="container">




  <div class="col-lg-9">
    
  <hr>
  <div class="row">
    <?php
     $id=$_GET['id'];
     $query="SELECT * FROM cards WHERE category=$id";
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

 
  




<?php
 include('includes/scripts.php');
 include('includes/footer.php');
 
 ?>
