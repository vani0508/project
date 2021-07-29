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
    <script src="../JS/feedback.js"></script>
    <title>Feedback</title>
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
        <h3 class="text-center"><u>FEEDBACK FORM</u></h3>
    </div>
<form method="post">
    <div class="container" style="margin-top: 20px; border: 1px solid black; border-radius: 10px;padding:20px; align-items: center;">
        <div class="form-group row">
            <label for="userid" class="col-sm-2 col-form-label"><strong>UserId</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="userid" id="userid" placeholder="Userid">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label"><strong>Name</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label"><strong>Email</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" id="email" placeholder="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label"><strong>Feedback</strong></label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="feedback" id="feedback"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
              <button class="btn btn-primary" type="submit" name="submit" id="btn">Submit</button>
            </div>
        </div>
    </div>
    </form>

</body>

<?php
include 'connect.php';
              if (isset($_POST['submit'])) {
                $userid = $_POST['userid'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $feedback = $_POST['feedback'];

               $query = "insert into 
               feedback(user_id,name,email,feedback)values($userid,'$name','$email','$feedback')";
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