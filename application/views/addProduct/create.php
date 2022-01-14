<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
</head>
<body><section class="content">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->

    <!-- Main content -->
  
    <!-- /.content -->
    
    <a href="<?php echo base_url("ProductAdded")?>"class="btn btn-primary float-right">Back</a>
        <form action="<?php echo base_url("productStore")?>" method="POST" style="padding: 10% 20%;">
            <div  class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product</label>
              
              <input class="form-control"  type="text"  name="product" aria-label="default input example" placeholder="Enter Product Name">
             <small><?php echo form_error('product') ?></small>
             
            </div>
              
            
            
            <button  type="submit"  class="btn btn-dark">Save</button>
            
        
            

            
        </form>
 

 
    </section>
</div>
</body>
</html>




