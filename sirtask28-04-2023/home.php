


    
    
       <div class="modal-body">
<!-- form start -->


    <div class="container">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>            
        <p>show</p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email id</th>
              <th>Phone no</th>
              <th>course</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
         <?php
        foreach($shwjoin as $row)
         {
?>
<tr>
        <td><?php echo $row["id"]; ?> </td>
         <td><?php echo $row["first_name"]; ?> </td>
         <td><?php echo $row["last_name"]; ?> </td>
         <td><?php echo $row["email"]; ?> </td>
         <td><?php echo $row["phone"]; ?> </td>
         <td><?php echo $row["course_name"]; ?>  </td>
         <td><a href="<?php echo $row["course_id"]; ?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | <a href="<?php echo $row["course_id"]; ?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a></td>
         </tr>
         <?php     
         }
              ?>
          </tbody>
        </table>
      </div>    



  <!-- form start -->


  <!-- Basic Modal -->
  <button type="button" class="btn btn-outline-primary"  data-bs-toggle="modal" data-bs-target="#basicModal"  
   style="margin-top: -600px; margin-left: 90%;">add</button>
                
              </button>
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               
  <!--========================================================================================-->
                                         <!-- Form Start -->
  <!-- =======================================================================================-->

                            
                            <form class="row g-3" method="post">
                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">First name</label>
                                        <input type="text" class="form-control" name="fnm" id="validationDefault01" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="lnm" id="validationDefault02" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefaultUsername" class="form-label">Email ID</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault03" class="form-label">Phone</label>
                                        <input type="number" class="form-control" name="phone" id="validationDefault03" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault04" class="form-label">Course</label>
                                        <select class="form-select" name="cnm"  id="validationDefault04" required>
                                        <option value="">-select course-</option>
 
            <?php
            foreach($shw as $shw1)
            { 
            ?>
            <option value="<?php echo $shw1["course_id"];?>"><?php echo $shw1["course_name"];?></option>
            <?php 
            }
            ?> 

                  </select>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" name="btn" type="submit">Submit</button>
                                    </div>
                                </form>



                               