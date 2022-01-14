
  <div class="content-wrapper">
  

     
      <section class="content">
          <div class="col-md-12 mt-4">
              <div class="card">
                  <div class="card-header">
                      
                    
                     
                      <h5>showing all Product Added
                      <a href="<?php echo base_url("addproduct")?>"class="btn btn-primary float-right">Add Product</a>
                      </h5>
                      
                  <div class="card-body">
                     <table id="datatable1" class="table table-bordered">
                         <thead>
                             <th>ID</th>
                             <th>product Name</th>
                            
                             <th>Edit</th>
                             <th>Delete</th>
                         </thead>
                         <tbody>
                         <?php foreach($Ali as $row):?>
                         
                            <tr>
                                 <td><?php  echo $row->id; ?></td>
                                 <td><?php  echo $row->product; ?></td>
                                
                                 <td>
                                     <a href="" class="btn btn-success btn-sm">Edit</a>
                                 </td>
                                 <td>
                                     <a href="" class="btn btn-danger btn-sm">Delete</a>
                                 </td>
                             </tr>
                             <?php  endforeach;
                             ?>
                         </tbody>
                     </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
 