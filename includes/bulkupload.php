
<?php
error_reporting(0);
if(isset($_POST["submit"]))
{
// $host="localhost"; // Host name.
// $db_user="root"; //mysql user
// $db_password=""; //mysql pass
// $db='gym'; // Database name.
// $conn=mysqli_connect($host,$db_user,$db_password,$db);


    $filename=$_FILES["file"]["name"];


    $ext= strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $move = "uploads/";
    $_FILES["file"]['name']."<br>";
    $_FILES["file"]['tmp_name']."<br>";
    $_FILES["file"]['size']."<br>";
    $_FILES['file']['error']."<br>";
    move_uploaded_file($_FILES['file']['tmp_name'], $move.$filename);






//we check,file must be have csv extention
    if($ext=="csv")
    {
        $x=0;

        $file = fopen($move.$_FILES["file"]['name'], "r");
        while (($emapData = fgetcsv($file, ",")) !== FALSE)
        {
            if ($x>0) {
                # code...

                $select="select * from students where `roll`='$emapData[1]'";

                $res_select=mysqli_query($conn,$select);
                $rc=mysqli_num_rows($res_select);


                if ($rc==0){
                   $sql = "INSERT into students SET name='$emapData[0]',roll='$emapData[1]',college='$emapData[2]',branch='$emapData[3]',year='$emapData[4]',contact='$emapData[5]',gender='$emapData[6]',room='$emapData[7]',startday='$emapData[8]',expiry='$emapData[9]',type='$emapData[10]',fee='$emapData[11]' ";
                    // exit();
                    mysqli_query($conn,$sql);
                }
                else{
                   $update="UPDATE students SET name='$emapData[0]',roll='$emapData[1]',college='$emapData[2]',branch='$emapData[3]',year='$emapData[4]',contact='$emapData[5]', gender='$emapData[6]',room='$emapData[7]',startday='$emapData[8]',expiry='$emapData[9]',type='$emapData[10]',fee='$emapData[11]' where roll='$emapData[1]'";
                   $res_select=mysqli_query($conn,$update);

               }
           }
           $x++;
       }
        fclose($file);
       echo "CSV File has been successfully Imported.";
   }

   else {
    echo "Error: Please Upload only CSV File";
}


}
?>


<html>
<head>
    <title>Bulk Upload | Gym</title>
</head>
<body>
    <div class="container " style="margin-top: 10%">
        <h1><center><b>BULK UPLOAD</b></center></h1><br><br>

        <form enctype="multipart/form-data" method="post" action="">
            <center><table border="1" >
                <tr >
                    <td colspan="2" align="center"><strong>Import CSV file</strong></td>
                </tr>
                <tr>
                    <td align="center">CSV File:&nbsp</td><td>&nbsp&nbsp&nbsp<input type="file" name="file" id="file"></td></tr>
                    <tr >
                        <td colspan="2" align="center"><input class="col-md-5 btn btn-success" type="submit" value="submit" name="submit"></td>
                    </tr>
                </table></center>
            </form>
        </div>
    </body>
    </html>