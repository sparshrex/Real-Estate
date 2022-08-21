<?php
include('db.php');

?>

<!DOCTYPE html>
<html>

<head>
     <title>Seller Operation</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="addsellerdetails.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

     <div class="container font">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
               <i class="fa fa-plus"></i> Activate New Card
          </button>

          <div class="modal-body">
               <form action="add.php" method="POST" enctype="multipart/form-data">

                    <!-- This is test for New Card Activate Form  -->
                    <!-- This is Address with email id  -->
                    <div class="form-row ">
                         <div class="form-group col-md-6">
                              <label for="inputEmail4">Seller Id.</label>
                              <input type="text" class="form-control innerfont" name="card_no" placeholder="Enter 12-digit Student Id." maxlength="12" required >
                         </div>
                         <div class="form-group col-md-6">
                              <label for="inputPassword4">Mobile No.</label>
                              <input type="phone" class="form-control innerfont" name="user_phone" placeholder="Enter 10-digit Mobile no." maxlength="10" required>
                         </div>
                    </div>


                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="firstname">First Name</label>
                              <input type="text" class="form-control innerfont" name="user_first_name" placeholder="Enter First Name">
                         </div>
                         <div class="form-group col-md-6">
                              <label for="lastname">Last Name</label>
                              <input type="text" class="form-control innerfont" name="user_last_name" placeholder="Enter Last Name">
                         </div>
                    </div>


                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="fathername">Father's Name</label>
                              <input type="text" class="form-control innerfont" name="user_father" placeholder="Enter First Name">
                         </div>
                         <div class="form-group col-md-6">
                              <label for="mothername">Mother's Name</label>
                              <input type="text" class="form-control innerfont" name="user_mother" placeholder="Enter Last Name">
                         </div>
                    </div>


                    <div class="form-row" style="color: skyblue;">
                         <div class="form-group col-md-6">
                              <label for="email" style="color: red;">Email Id</label>
                              <input type="email" class="form-control innerfont" name="user_email" placeholder="Enter Email id">
                         </div>
                         <div class="form-group col-md-6">
                              <label for="aadharno" style="color:red ;">Aadhar No.</label>
                              <input type="text" class="form-control innerfont" name="user_aadhar" maxlength="12" placeholder="Enter 12-digit Aadhar no. ">
                         </div>
                    </div>

                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="inputState">Gender</label>
                              <select id="inputState" name="user_gender" class="form-control innerfont">
                                   <option selected>Choose...</option>
                                   <option>Male</option>
                                   <option>Female</option>
                                   <option>Other</option>
                              </select>
                         </div>
                         <div class="form-group col-md-6">
                              <label for="inputPassword4">Date of Birth</label>
                              <input type="date" class="form-control innerfont" name="user_dob" placeholder="Date of Birth">
                         </div>
                    </div>


                    <div class="form-group">
                         <label for="family">Family Member's</label>
                         <textarea class="form-control innerfont" name="family" rows="3"></textarea>
                    </div>



                    <div class="form-group">
                         <label for="inputAddress">Village</label>
                         <input type="text" class="form-control innerfont" name="village" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                         <label for="inputAddress2">Police Station</label>
                         <input type="text" class="form-control innerfont" name="police_station" placeholder="Enter police station">
                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-6">
                              <label for="inputCity">District</label>
                              <input type="text" class="form-control innerfont" name="dist">
                         </div>
                         <div class="form-group col-md-4">
                              <label for="inputState">State</label>
                              <select name="state" class="form-control innerfont">
                                   <option selected>Choose...</option>
                                   <option value="Andhra Pradesh">Andhra Pradesh</option>
                                   <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                   <option value="Assam">Assam</option>
                                   <option value="Bihar">Bihar</option>
                                   <option value="Chandigarh">Chandigarh</option>
                                   <option value="Chhattisgarh">Chhattisgarh</option>
                                   <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                   <option value="Daman and Diu">Daman and Diu</option>
                                   <option value="Delhi">Delhi</option>
                                   <option value="Lakshadweep">Lakshadweep</option>
                                   <option value="Puducherry">Puducherry</option>
                                   <option value="Goa">Goa</option>
                                   <option value="Gujarat">Gujarat</option>
                                   <option value="Haryana">Haryana</option>
                                   <option value="Himachal Pradesh">Himachal Pradesh</option>
                                   <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                   <option value="Jharkhand">Jharkhand</option>
                                   <option value="Karnataka">Karnataka</option>
                                   <option value="Kerala">Kerala</option>
                                   <option value="Madhya Pradesh">Madhya Pradesh</option>
                                   <option value="Maharashtra">Maharashtra</option>
                                   <option value="Manipur">Manipur</option>
                                   <option value="Meghalaya">Meghalaya</option>
                                   <option value="Mizoram">Mizoram</option>
                                   <option value="Nagaland">Nagaland</option>
                                   <option value="Odisha">Odisha</option>
                                   <option value="Punjab">Punjab</option>
                                   <option value="Rajasthan">Rajasthan</option>
                                   <option value="Sikkim">Sikkim</option>
                                   <option value="Tamil Nadu">Tamil Nadu</option>
                                   <option value="Telangana">Telangana</option>
                                   <option value="Tripura">Tripura</option>
                                   <option value="Uttar Pradesh">Uttar Pradesh</option>
                                   <option value="Uttarakhand">Uttarakhand</option>
                                   <option value="West Bengal">West Bengal</option>
                              </select>
                         </div>
                         <div class="form-group col-md-2">
                              <label for="inputZip">Square Area Land</label>
                              <input type="text" class="form-control innerfont" name="pincode">
                         </div>
                    </div>


                    <div class="form-group">
                         <label for="inputAddress">Price</label>
                         <input type="text" class="form-control innerfont" name="staff_id" maxlength="12" placeholder="Enter 12-digit Staff Id">
                    </div>



                    <div class="form-group">
                         <label>Image</label>
                         <input type="file" name="image" class="form-control innerfont">
                    </div>


                    <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">


               </form>
          </div>
          <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
     </div>

     

     <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
     <script>
          $(document).ready(function() {
               $('#myTable').DataTable();

          });
     </script>

</body>

</html>