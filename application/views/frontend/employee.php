<div class="content-wrapper">
  
<div class="content">
    <!-- <div class="row"> -->
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <?php if($this->session->flashdata('status')): ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('status'); ?>
                    </div>
                    <?php endif; ?>
                    <h5>how to insert data into database
                    <a href="<?php echo base_url('employee/add')?>"class="btn btn-primary float-right">Add Employee</a>
                    </h5>
                    
                <div class="card-body">
                   <table id="datatable1" class="table table-bordered">
                       <thead>
                           <!-- <th>ID</th> -->
                           <th>Branch</th>
                           <th>Designation</th>
                           <th>Rank</th>
                           <th>DHA/Army No</th>
                           <th>Employee Name</th>
                           <th>Mobile No</th>
                           <th>Category</th>
                           <th>Edit</th>
                           <th>Delete</th>
                       </thead>
                       <tbody>
                           <?php foreach($employee as $row):?>
                          
                       
                           <tr>
                               <!-- <td><?php  echo $row->id; ?></td> -->
                               <td><?php  echo $row->branch; ?></td>
                               <td><?php  echo $row->designation; ?></td>
                               <td><?php  echo $row->rank; ?></td>
                               <td><?php  echo $row->dhaNO; ?></td>
                               <td><?php  echo $row->empName; ?></td>
                               <td><?php  echo $row->MobileNo; ?></td>
                               <td><?php  echo $row->Category; ?></td>
                               <td>
                                   <a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-success btn-sm">Edit</a>
                               </td>
                               <td>
                                   <a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btn-sm">Delete</a>
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

</div>



