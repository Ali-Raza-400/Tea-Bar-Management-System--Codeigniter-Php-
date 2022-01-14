<?php 
include("template/header.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
  
    <!-- /.content -->
    <section class="content">
        <form style="padding: 10% 35%;">
            <div  class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Branch Name</label>
              <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
              <input class="form-control"  type="text"  aria-label="default input example" placeholder="Enter Branch Name...">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
             </div>
           
        
            <button  type="submit"  class="btn btn-dark">Add</button>
           

            
        </form>
 

 <!-- /.container-fluid -->
    </section>
</div>
</body>
</html>
<?php 
include("template/footer.php");


?>