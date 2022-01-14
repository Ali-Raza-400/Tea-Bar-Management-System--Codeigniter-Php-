


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
  
    <!-- /.content -->

    <section class="content" >
    <form action="<?php echo base_url('employee/store') ?>"  style="padding: 10% 20%;"  method="POST">

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Branch</label>
    <div class="col-sm-10">
    <select class="form-control"type="text" name="branch" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <small><?php echo form_error('branch'); ?></small>
      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <!-- <input class="form-control"  type="text"  aria-label="default input example" placeholder="Branch Name..."> -->
    </div>
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-10">
    <select class="form-control"type="text" name="designation" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <small><?php echo form_error('designation'); ?></small>
      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <!-- <input class="form-control"  type="text"  aria-label="default input example" placeholder="Branch Name..."> -->
    </div>
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
    <div class="col-sm-10">
    <select class="form-control"type="text" name="rank" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <small><?php echo form_error('rank'); ?></small>
    </div>
    
   
</br>
    <!-- <label >DHA/Army No.</label> -->
    <!-- <div class="col-sm-6">

      
      <input class="form-control"  type="text" name="dhaNO"   placeholder="Branch Name..."></div>
          
    </div> -->
    <small><?php echo form_error('dhaNO'); ?></small>
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DHA/ARMY No</label>
    <div class="col-sm-10">

      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <input class="form-control"  type="text" name="dhaNO" 
      aria-label="default input example" placeholder="DHA/ARMY No">
      <small><?php echo form_error('dhaNO'); ?></small>
    </div>

    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee Name</label>
    <div class="col-sm-10">

      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <input class="form-control"  type="text" name="empName" 
      aria-label="default input example" placeholder="Branch Name">
      <small><?php echo form_error('empName'); ?></small>
    </div>



    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number</label>
    <div class="col-sm-10">

      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <input class="form-control"  type="text" name="MobileNo"  aria-label="default input example" placeholder="Branch Name...">
    </div>
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" placeholder="select" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
    <select class="form-control"type="text" name="Category" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <small><?php echo form_error('Category'); ?></small>

      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <!-- <input class="form-control"  type="text"  aria-label="default input example" placeholder="Branch Name..."> -->
    </div>
    </div>

   

      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
      <!-- <input class="form-control"  type="text"  aria-label="default input example" placeholder="Branch Name..."> -->
  
      <!-- <input type="text" class="form-control" id="inputEmail3"> -->
 




      <div class="form-group">
                           <button type="submit" class="btn btn-primary"> Save</button>
                        </div>



    </form>
  
    </section>
</div>
</body>
</html>


