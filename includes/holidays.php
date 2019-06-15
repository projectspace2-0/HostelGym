<?php

$select="SELECT * FROM holidays";
$res=mysqli_query($conn,$select);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Holidays | Gym</title>
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
    <div class="container ">
        <h1><center><b>HOLIDAYS</b></center></h1>
        <form method="post"></form>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered " style="width:100%">
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>Holiday Date</th>
                        <th>Reason</th> 
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                         <?php
                    $i=1;
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <td><?php echo $i++;?></td>  
                        <td>
                            <?php 
                            if ($row['from_date']==$row['to_date']) 
                            {
                                ?>
                                    <b><?php echo $row['from_date'];?></b>
                                    <?php
                            }
                             else{
                                ?>

                            <b><?php echo $row['from_date'] ?></b> to <b><?php echo $row['to_date'];?></b>
                            <?php
                             }
                            ?>
                        </td>
                        <td><b><?php echo $row['reason'];?></b>
                        <td>
                            <a href="?p=<?php echo base64_encode('holidays') ?>&act=delete&id=<?php echo base64_encode($row['id']) ?>" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            ?>
                   
            </tbody>        
        </table>
    </div>
</form>
</div>
</body>
</html>
<?php
if (@$_GET['id']!="") {

   include 'config.php';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
   $id = base64_decode($_GET['id']);
    echo $res="DELETE FROM holidays where id='$id'";
    if (mysqli_query($conn,$res)) {
        echo "<script>location.href='?p=".base64_encode('holidays')."'</script>";
    }
    else{
        echo "<script> alert('Please Try Again')   </script>";
    }
    // $co=; 
    

}
?>