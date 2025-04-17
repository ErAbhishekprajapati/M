<?php
include "studentsconnection.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student Detail</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .form-container {
      background-color:#19717C;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
    }
    .form-control {
      background-color: #f8f9fa;
      border: none;
    }
    .form-label {
      font-weight: bold;
      color: white;
    }
    .btn-submit {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .btn-submit:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="form-container">
          <h3 class="text-center">Student Registration Form</h3>
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" name="fistname" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email"name="email"required>
                </div>
                <div class="mb-3">
                  <label for="fatherName" class="form-label">Father Name</label>
                  <input type="text" class="form-control" id="fatherName" placeholder="Enter your Father's name"name="fathername"required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Gender</label><br>
                  <input type="radio" id="male" name="gender" value="male">
                  <label for="male" class="form-label">Male</label>
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female" class="form-label">Female</label>
                </div>
                <div class="mb-3">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Enter your City"name="city"required>
                </div>
                <div class="mb-3">
                  <label for="nationality" class="form-label">Address</label>
                  <input type="text" class="form-control" id="nationality" placeholder="Enter your Address"name="address"required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="Enter your last name"name="lastname"required>
                </div>
                <div class="mb-3">
                  <label for="birthdate" class="form-label">Birthdate</label>
                  <input type="date" class="form-control" id="birthdate"name="birthday"required>
                </div>
                <div class="mb-3">
                  <label for="mobile" class="form-label">Mobile</label>
                  <input type="text" class="form-control" id="mobile" placeholder="Enter your Mobile"name="mobile"required>
                </div>
                <div class="mb-3">
                  <label for="district" class="form-label">District</label>
                  <input type="text" class="form-control" id="district" placeholder="Enter your District"name="distric"required>
                </div>
                <div class="mb-3">
                  <label for="state" class="form-label">State</label>
                  <input type="text" class="form-control" id="state" placeholder="Enter your State"name="state"required>
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Upload Photo</label>
                  <input type="file" class="form-control" id="photo"name="uploadphoto"required>
                </div>
              </div>
            </div>
            <div class="text-center">
              <input type="submit" class="btn-submit" name="register">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  if($_POST['register'])
  {
    $fname=$_POST['fistname'];
    $ename=$_POST['email'];
    $fathername=$_POST['fathername'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $birthday=$_POST['birthday'];
    $mobile=$_POST['mobile'];
    $distric=$_POST['distric'];
    $state=$_POST['state'];
    $upload=$_POST['uploadphoto'];
   
  }


?>