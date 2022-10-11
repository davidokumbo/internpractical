<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tbl{
            width:70%;
        }
        .tbl tr th{
            border-bottom: 2px solid black;
            padding:2px;
            width:100%;
            text-align:left;
        }
        .tbl tr td{
            padding:3px;
            border-bottom: 1px solid black;
            border-left: 2px solid black;
        }
    </style>
</head>
<body>
    

<?php
define('LOCALHOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'internship');
$conn = mysqli_connect( LOCALHOST, USERNAME, PASSWORD, DBNAME) ;
?>

<table class="tbl">
  <tr>
    <th>NO</th>
    <th>COLUMN 1</th>
    <th>COLUMN 2</th>
    <th>COLUMN 3</th>
    <th>COLUMN 4</th>
    <th>COLUMN 5</th>
    <th>COLUMN 6</th>
    <th>COLUMN 7</th>
    <th>COLUMN 8</th>
    <th>COLUMN 9</th>
  </tr>
 <br> 
         <?php
          $sqlfetch= "SELECT * FROM practical";
          $result=mysqli_query($conn, $sqlfetch);
          if($result==true){
            $count=mysqli_num_rows($result);
            if($count>0){
              while($data=mysqli_fetch_assoc($result)){
                $no=$data['no'];
                $col1=$data['col1'];
                $col2=$data['col2'];
                $col3=$data['col3'];
                $col4=$data['col4'];
                $col5=$data['col5'];
                $col6=$data['col6'];
                $col7=$data['col7'];
                $col8=$data['col8'];
                $col9=$data['col9'];
         ?>
         <tr>
          <td><?php echo $no?></td>
          <td><?php echo $col1?></td>
          <td><?php echo $col2?></td>
          <td><?php echo $col3?></td>
          <td><?php echo $col4?></td>
          <td><?php echo $col5?></td>
          <td><?php echo $col6?></td>
          <td><?php echo $col7?></td>
          <td><?php echo $col8?></td>
          <td><?php echo $col9?></td>
         </tr>
         <?php
              }

            }
            else{
              echo "failed to fetch data from database";
            }
          }

         ?>




</table>

</body>
</html>