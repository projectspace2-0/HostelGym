<title>Dashboard | Gym</title>

<?php

$selectreg="SELECT * from students  WHERE  user_type='student'";
$res_select=mysqli_query($conn,$selectreg);
$reg=mysqli_num_rows($res_select);
$date = date('Y-m-d');



// $select_no="select DISTINCT(roll) from attendance where date='$date'";
// $res_select_no=mysqli_query($conn,$select_no);
// $reg_no=mysqli_num_rows($res_select_no);
// $absent=bcsub($reg,$reg_no);

if(isset($_POST['submit']))
{
  $select_no="select DISTINCT(roll) from attendance where date='$date' and user_type='student'";
  $res_select_no=mysqli_query($conn,$select_no);
  $reg_no=mysqli_num_rows($res_select_no);
  $absent=bcsub($reg,$reg_no);

  $rollnumber=$_POST['rollnumber']; 
  $select="select * from students where roll='$rollnumber'";
  $result=mysqli_query($conn,$select);
  $fetch_details=mysqli_fetch_array($result);
  $name=$fetch_details['name'];
  $user_type=$fetch_details['user_type'];
  $rowcount=mysqli_num_rows($result);



  $select1="select * from attendance where roll='$rollnumber' and date='$date' order by id desc";
  $result1=mysqli_query($conn,$select1);
  $rowcount1=mysqli_num_rows($result1);
  $fetch_details1=mysqli_fetch_array($result1);
  date_default_timezone_set('Asia/Kolkata');
  $time=date('H:i:s');
  if ($rowcount>0) 
  {
    if ($user_type=='student') 
    {
      if ($date<$fetch_details['expiry']) 
      { 

        if ($fetch_details['type']==1)
        {
          if ($rowcount1==0)
          {
            $insert="insert into attendance(`roll`,`name`,`date`,`login`)
            values('$rollnumber','$name','$date','$time')";
            $res_insert=mysqli_query($conn,$insert);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> Succesfully Logged In.
            </div>

            <?php
          }
          elseif ($rowcount1==1 && $fetch_details1['logout']=="" )
          {
            $update1="UPDATE attendance SET `logout`='$time' WHERE roll='$rollnumber'";
            $res_update1=mysqli_query($conn,$update1);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong>Succesfully Logged Out
            </div>
            <?php


          }
          else
          {
            ?>
            <div class="alert alert-warning">
              <strong>Warning!</strong> 1 Time Limit Exceeded For Today ..!
            </div>
            <?php
          }
        }
        else
        {
          if ($rowcount1==0)
          {
            $insert="insert into attendance(`roll`,`name`,`date`,`login`)
            values('$rollnumber','$name','$date','$time')";
            $res_insert=mysqli_query($conn,$insert);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> Succesfully Logged In.
            </div>

            <?php
          }
          elseif ($rowcount1==1 &&  $fetch_details1['logout']=="" ) 
          {
            $update1="UPDATE attendance SET `logout`='$time' WHERE roll='$rollnumber'";
            $res_update1=mysqli_query($conn,$update1);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong>Succesfully Logged Out
            </div>
            <?php

          }
          elseif ($rowcount1==1 && $fetch_details1['logout']!=""  )
          {
            $insert="insert into attendance(`roll`,`name`,`date`,`login`)
            values('$rollnumber','$name','$date','$time')";
            $res_insert=mysqli_query($conn,$insert);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> Succesfully Logged In.
            </div>

            <?php

          }
          
          elseif ($rowcount1==2 &&  $fetch_details1['logout']=="" )
          {
  
            $update1="UPDATE attendance SET `logout`='$time' WHERE id='$fetch_details1[id]'";
            $res_update1=mysqli_query($conn,$update1);
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong>Succesfully Logged Out
            </div>
            <?php

          }
          else
          {

            ?>
            <div class="alert alert-warning">
              <strong>Warning!</strong> 2 Time limit Exceeded For Today..!
            </div>
            <?php
          }
        }
      }
      else
      {

        ?>
        <div class="alert alert-danger">
          <strong>Warning!</strong>Fee Not Paid
        </div>
        <?php


      }
    }
    else
    {
      if ($rowcount1==0)
      {
        $insert="insert into attendance(`roll`,`name`,`date`,`login`,`user_type`)
        values('$rollnumber','$name','$date','$time','faculty')";
        $res_insert=mysqli_query($conn,$insert);
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Succesfully Logged In.
        </div>

        <?php
      }
      elseif ($rowcount1==1 &&  $fetch_details1['logout']=="" ) 
      {
        $update1="UPDATE attendance SET `logout`='$time' WHERE roll='$rollnumber'";
        $res_update1=mysqli_query($conn,$update1);
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong>Succesfully Logged Out
        </div>
        <?php

      }
      elseif ($rowcount1==1 && $fetch_details1['logout']!=""  )
      {
        $insert="insert into attendance(`roll`,`name`,`date`,`login`,`user_type`)
        values('$rollnumber','$name','$date','$time','faculty')";
        $res_insert=mysqli_query($conn,$insert);
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong> Succesfully Logged In.
        </div>

        <?php

      }
      

      elseif ($rowcount1==2 &&  $fetch_details1['logout']=="")
      {
        $update1="UPDATE attendance SET `logout`='$time' WHERE id='$fetch_details1[id]'";
        $res_update1=mysqli_query($conn,$update1);
        ?>
        <div class="alert alert-success">
          <strong>Success!</strong>Succesfully Logged Out
        </div>
        <?php

      }
      else
      {

        ?>
        <div class="alert alert-warning">
          <strong>Warning!</strong>Already done 2 times
        </div>
        <?php
      }  

    }
  }
    else
    {
      ?>
      <div class="alert alert-danger">
        <strong>Warning!</strong>Details Not Found
      </div>
      <?php

    }
  }




// $name=echo $fetch_details[1];
?>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<div class="container-fluid">

  <!-- Breadcrumbs-->

  <div class="row bg-light text-dark">

    <div class="col-md-6 col-sm-6" style="margin: 0 auto">
      <form action="" method="post">
        <input class="col-md-6" type="text" name="rollnumber" placeholder="Enter/Scan your Id" autofocus  style="margin:3%">
        <span><input class="btn btn-primary " type="submit" name="submit"></span>
      </form>
    </div>
    <!--  </ol> -->
  </div>

  <!--market updates updates-->
  <div class="row">
    <div class="col-md-6">

      <div class="panel panel-default">
        <div class="panel-heading bg-light text-dark" style="-webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;"> 
        <center><h3>DETAILS</h3></center>
      </div>
      <div class="panel-body" >
        <div class="col-md-8  ">
          <div class="col-md-8 pull-right" >
            <div class="panel-body">
              <center><img src="includes/user.png" height="100" width="100"></center>
            </div>
          </div>
          <tr1></tr1>
          <table class="table data">
            <tbody>
              <tr>
                <td class="data">
                  <p>Name </p>
                </td>
                <td>
                  <p class="name" id="name" style="font-family:sans-serif"></p>:<?php echo @$fetch_details['name'];?>
                </td>
                <td class="data">

                </td>
              </tr>
              <tr>
                <td class="data">
                  <p>Rollno </p>
                </td>
                <td>
                  <p id="rollno" style="font-size:15px;font-family:sans-serif">:<?php echo @$fetch_details['roll']; ?>

                </p>
              </td>
              <td class="data"></td>
            </tr>
            <tr>
              <td class="data">
                <p>Department </p>
              </td>
              <td>
                <p id="dept" style="font-size:15px;font-family:sans-serif"></p>:<?php echo @$fetch_details['branch']; ?>
              </td>
              <td class="data"></td>
            </tr>
            <tr>
              <td class="data">
                <p>Room No</p>
              </td>
              <td>
                <p id="room" style="font-size:15px;font-family:sans-serif"></p>:<?php echo @$fetch_details['room']; ?>
              </td>
              <td class="data"></td>
            </tr>

           
            <tr>
              <td class="data">
                <p>College </p>
              </td>
              <td>
                <p id="college" style="font-size:15px;font-family:sans-serif"></p>:<?php echo @$fetch_details['college']; ?>
              </td>
              <td class="data"></td>
            </tr>
            <tr>
              <td class="data">
                <p id="information" style="font-size:20px;font-family:sans-serif;color:green"></p>
              </td>
              <td>

              </td>
              <td>

              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<!-- -->

<!--market updates end here-->

<div class="col-md-6 market-update-gd  ">
  <div class="row market-updates" style="margin-top: 5%;">
    <a href="?p=<?php echo base64_encode('students') ?>" class="col-md-6 ">
      <div class="market-update-gd"  >
        <div class="market-update-block clr-block-1" >
          <div class=" market-update-left">
            <center>
              <h3><?php echo $reg; ?></h3>
              <h4>Registered User</h4>
              <br>
            </center>
          </div>
<!-- <div class="col-md-6 market-update-right">
<i class="fa fa-file-text-o"> </i>
</div> -->
<div class="clearfix"> </div>
</div>
</div>
</a>
<a href="?p=<?php echo base64_encode('today_absent') ?>" class="col-md-6 ">
  <div class="market-update-gd">
    <div class="market-update-block clr-block-2">
      <div class=" market-update-left">
        <?php 
        $select_no="select DISTINCT(roll) from attendance where date='$date' and user_type='student'";
        $res_select_no=mysqli_query($conn,$select_no);
        $reg_no=mysqli_num_rows($res_select_no);
        $absent=bcsub($reg,$reg_no);
        ?>
        <center>

          <h3><?php echo $absent  ?></h3>
          <h4>Absent</h4>
        </center>
        <br>
      </div>
<!-- <div class="col-md-6 market-update-right">
<i class="fa fa-eye"> </i>
</div> -->
<div class="clearfix"> </div>
</div>
</div> 
</a>
<div class="market-update-block clr-block-3" style="margin: 5%">
  <a href="?p=<?php echo base64_encode('today_present') ?>">
    <div class=" market-update-left">

      <?php 
      $select_no="select DISTINCT(roll) from attendance where date='$date' and `user_type`='student'";
      $res_select_no=mysqli_query($conn,$select_no);
      $reg_no=mysqli_num_rows($res_select_no);
// $absent=bcsub($reg,$reg_no);
      ?>
      <center><h1 style="color: #fff; font-size: 100px"><?php echo $reg_no; ?></h1></center>
      <center><h2 style="color: #fff;">NUMBER OF STUDENTS LOGGED TODAY</h2></center>

    </div>

    <div class="clearfix"> </div>
  </a>
</div>
</div>
</div>
</div>
