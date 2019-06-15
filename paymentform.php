<?php 
  include("config.php"); 
  
?>
    
    <html>
      <head>
        <title>PAYMENT</title></head></html>
        
          <!--fontawesome symbols-->
          <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
          .main{
            height:1100px;
            background-image:url("wp.jpg");
            background-repeat: no-repeat;
            background-size:100% 1100px;          }
          .r1{
            height:800px;
            margin-top:4%;
              
          }
          .page{
            background-color:white; 
            opacity:0.7;
            <!--background-image:url("bg1.png");-->
            background-repeat:no-repeat;
            background-position:center;
            background-size:100%;
            margin-top: 80px;
          }
          h3{
            text-decoration:underline;
          }
        </style>
      </head>
      <body>
        <div class="container main">
          
            <?php
      if(isset($_POST['register']))
      {
        
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="registration";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $rollnumber=$_POST['roll'];
        $name=$_POST['name'];
        $branch=$_POST['branch'];
        $college=$_POST['college'];
        $year=$_POST['year'];
        $phone=$_POST['phone'];
        $bloodgroup=$_POST['bloodgroup'];
        $gender=$_POST['gender'];
        $age=$_POST['age'];
        $health=$_POST['health'];
        $weight=$_POST['weight'];
        $location=$_POST['location'];
          $select="select * from registration where ROLLNO='$rollnumber'";
          $result=mysqli_query($conn,$select);
          $rowcount=mysqli_num_rows($result);
          
          
          if($rowcount==0){
            //$insert="insert into registration(ROLLNO,NAME,BRANCH,COLLEGE,YEAR,PHONE,GROUP,GENDER,HEALTH,WEIGHT,LOCATION)values('$rollnumber','$name','$branch','$college','$year','$phone','$group','$gender','$health','$weight','$location')";
            $insert="insert into  registration set ROLLNO='$rollnumber',NAME='$name',BRANCH='$branch',COLLEGE='$college',YEAR='$year',PHONE='$phone',BLOODGROUP='$bloodgroup',GENDER='$gender',AGE='$age',HEALTH='health',WEIGHT='$weight',LOCATION='$location'";
  
            $res=mysqli_query($conn,$insert);
            if($res==true)
            {
              echo "<script>alert('inserted')</script>";
            }
            else
            {
              echo "failed query";
            }
          }
        if($rowcount==1)
        {
          $update="update registration set NAME='$name',BRANCH='$branch',COLLEGE='".$college."',YEAR='".$year."',PHONE='".$phone."',BLOODGROUP='".$bloodgroup."',GENDER='".$gender."',AGE='".$age."',HEALTH='".$health."',WEIGHT='".$weight."',LOCATION='".$location."' where ROLLNO='".$rollnumber."' ";
          $result=mysqli_query($conn,$update);
          if($result){
            echo "<script>alert('updated');location.href='data.php'</script>";
          }
          else
          {
            echo "not updated";
          }

        
        }
      }
      if(isset($_POST['logout']))
      {

        session_destroy();

        
      }
    ?> 
          <div class="row r1">
            <div class="col-md-offset-2 col-md-8 page">
            
            <form action="" method="post">
            <div class="row">

          </div>
          <div class="row">
            <div class="col-md-offset-4 col-md-6">
              <h3>Payment Form</h3></br>
            </div>
          </div>
              
                
                <div class="row">
                  <div class="col-md-offset-3 col-md-2">
                    <label>Name:</label>
                  </div>
                  <div class="col-md-4">
                    <input class="form-control"  type="text" name="name" id="name" placeholder="Enter Name" />
                  </div>
                </div>
                <br>
              </br>
<div class="row">
                  <div class="col-md-offset-3 col-md-2">
                    <label>Roll No:</label>
                    
                  </div>

                  <div class="col-md-4">
                    <input class="form-control" type="text" name="roll" id="roll"  placeholder="Enter Roll Number" />
                  </div>

                </div>
                <br>
              </br>

              
          
                
                <div class="row">
                  <div class="col-md-offset-3 col-md-2 ">
                    <label>Room No:</label>
                  </div>
                  <div class="col-md-4">
                    <input class="form-control"  type="number" name="room no" id="room" placeholder="Room Number" />
                  </div>
                </div>
                <br>
              </br>
                

              
            
                
 
                          
                
                  
              
                
                <div class="row">
                  <div class="col-md-offset-3 col-md-3 form-group">
                    <input class="form-control btn btn-success" value="PAY" type="submit" 
                     name="Pay" id="Pay"> 
                  </div>
                
                  <div class=" col-md-3">
            <input class="form-control btn btn-danger" value="CANCEL" type="submit" 
                     name="cancel" id="cancel"> 
            </div>
          </div>
              </form>
            </div>
          </div>
        </div><br/><br/><br/><br/>
      </body>
    </html>
