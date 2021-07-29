<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../JS/course.js"></script>
    <title>Course</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">Project</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                      Register
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">
                      Contacts
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="feedback.php">
                      Feedback
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="course.php">
                      Course
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 20px;">
        <h3 class="text-center"><u>COURSE FORM</u></h3>
    </div>
<form method="post">
    <div class="container" style="margin-top: 20px; border: 1px solid black; border-radius: 10px;padding:20px; align-items: center;">
        <div class="form-group row">
            <label for="courseid" class="col-sm-2 col-form-label"><strong>Course Id</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="courseid" id="courseid" placeholder="Userid" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="coursename" class="col-sm-2 col-form-label"><strong>Course Name</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="coursename" id="coursename" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="coursedesc" class="col-sm-2 col-form-label"><strong>Course Description</strong></label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="coursedesc" placeholder="Description" id="coursedesc" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="coursefees" class="col-sm-2 col-form-label"><strong>Course Fees</strong></label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="coursefees" id="coursefees" placeholder="Fees" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="courseresource" class="col-sm-2 col-form-label"><strong>Course Resource</strong></label>
            <div class="col-sm-10">
                <input type="file" accept=" video/*" class="form-control" name="courseresource" id="courseresource" required>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
              <button type="submit" class="btn btn-primary" name="submit" id="btn">Submit</button>
            </div>
        </div>
        </form>
    </div>

</body>
<?php
include 'connect.php';
              if (isset($_POST['submit'])) {
                $courseid = $_POST['courseid'];
                $coursename = $_POST['coursename'];
                $coursedesc = $_POST['coursedesc'];
                $coursefees = $_POST['coursefees'];
                $courseresource = $_POST['courseresource'];

               $query = "insert into course values ($courseid,'$coursename','$coursedesc','$coursefees','$courseresource')";
               $record = mysqli_query($conn, $query);

               if( $record){
             ?>
                <script type="text/javascript">
                      alert("Data Inserted");
                </script>
            <?php

          }
          else{
            ?>
            <script type="text/javascript">
                  alert("Data Not Inserted");
            </script>
        <?php
          }
        }
            ?>
</html>