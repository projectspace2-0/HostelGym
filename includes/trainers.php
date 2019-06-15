<?php
$select="SELECT * from students WHERE user_type='faculty' ";
$res=mysqli_query($conn,$select);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Trainers | Gym</title>
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
        <h1><center><b>TRAINERS DATA</b></center></h1>

        <form method="post"></form>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Name</th>
                    <th>Rollno</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>Room</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>

                    <tr>
                <?php
                $i=1;
                while($row=mysqli_fetch_array($res)){
                    ?>
                     <td><?php echo $i++;?></td>  
                     <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['roll'];?></td>
                     <td><?php echo $row['contact'];?></td>
                     <td><?php echo $row['gender'];?></td>
                     <td><?php echo $row['room'];?></td>            
                    

                     <td>
                    <a  class="btn btn-primary" href="?p=<?php echo base64_encode('edit') ?>&ID=<?php echo ($row[2]);?>">Edit</a>
                    
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

