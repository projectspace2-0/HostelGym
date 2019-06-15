<?php
// $servername="localhost";
// $username="root";
// $password="";
// $dbname="gym";
// $conn=mysqli_connect($servername,$username,$password,$dbname);
$select="select *from students where status=0";
$res=mysqli_query($conn,$select);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Dues | Gym</title>
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

<h1><center><b>STUDENT DUES</b></center></h1>
        <form method="post"></form>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Rollno</th>
                    <th>Room</th>
                    <th>PaymentDay</th>
                    <th>Expiry</th>
                    <!-- <th>Action</th> --> 
                </tr>
            </thead>
            <tbody>

                <?php
                $i=1;
                while($row=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                     <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['roll'];?></td>
                     <td><?php echo $row['room'];?></td>
                     <td><?php echo $row['startday'];?></td>
                     <td><?php echo $row['expiry'];?></td>
                
                    <!-- <button > <a href="?p=edit&ID=<?php echo ($row[2]);?>">Edit</a></button> -->
                    <!-- <a href="?p=students&id=<?php echo $row[2]; ?>&act=delete"><button class="btn btn-danger" onclick="return confirm('Are you sure to delete')">Delete</button></a> -->
                    <!-- <button class="btn btn-primary" class="form-group" type="submit">Pay</button></td> -->
                      
                 </tr>
                 <?php
             }
             ?>



         </tbody>        
     </table>

 </form>
</div>



</body>
</html>

<?php
if (@$_GET['id']!="" ) {

    $id=$_GET['id'];



    $res="DELETE  FROM students where `roll`='$id'";

    $co=mysqli_query($conn,$res);
    echo "<script> location.href='".base64_encode('students')."' </script>";


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
</script>