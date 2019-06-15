<?php
$select="select *from students WHERE user_type='student'";
$res=mysqli_query($conn,$select);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- <script src="vendor/jquery/jquery.min.js"></script>  -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>






</head>
<body>
    <div class="container-fluid">


        <form method="post"></form>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Rollno</th>
                    <th>College</th>
                    <th>Branch</th>
                    <th>Year</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Room</th>
                    <th>StartDay</th>
                    <th>Expiry</th>
                    <th>Status</th>
                    <th>Attd. Status</th> 
                </tr>
            </thead>
            <tbody>

                    <tr>
                <?php
                $i=1;
                while($row=mysqli_fetch_array($res)){
                    $select1="SELECT * from attendance where `roll`='".$row['roll']."'  AND date='".date('Y-m-d')."' ";
                    $selResult = mysqli_query($conn, $select1);
                    $count = mysqli_num_rows($selResult);
                    if ($count > 0) {
                    ?>
                     <td><?php echo $i++;?></td>  
                     <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['roll'];?></td>
                     <td><?php echo $row['college'];?></td>
                     <td><?php echo $row['branch'];?></td>
                     <td><?php echo $row['year'];?></td>
                     <td><?php echo $row['contact'];?></td>
                     <td><?php echo $row['gender'];?></td>
                     <td><?php echo $row['room'];?></td>
                     <td><?php echo $row['startday'];?></td>
                     <td><?php echo $row['expiry'];?></td>
                     <td><?php  if ($row['status']==1) {
                            echo "PAID";
                        }
                        else{
                            echo "NOT PAID";
                        }
                        ?>
                     </td>
                     <td><b class="text-success">Present</b></td>
                 </tr>
                 <?php
                }
             }
             ?>



         </tbody>        
     </table>

 </form>
</div>



</body>
</html>

<!-- <?php
if (@$_GET['id']!="" ) {

    $id=$_GET['id'];



    $res="DELETE  FROM students where `roll`='$id'";

    $co=mysqli_query($conn,$res);
    echo "<script> location.href='?p=".base64_encode('students')."' </script>";


}
?>
<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script> -->