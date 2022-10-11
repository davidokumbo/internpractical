<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
define('LOCALHOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'internship');
$conn = mysqli_connect( LOCALHOST, USERNAME, PASSWORD, DBNAME) ;   //connecting to database
//  $selectdb = mysqli_select_db($conn, DBNAME);

$data = file_get_contents("file.json"); // Reading the json file
$jsondata=json_decode($data, true);// converting json object to php associative array

for ($row = 0; $row < 50; $row++) {    //using nested for loop to get all values in the rows array which is inside listgrid
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 9; $col++) {
    // "<li>".$jsondata['listGrid']['rows'][$row][$col]."</li>";

     $col1= $jsondata['listGrid']['rows'][$row][0];  //saving the column values to make a single row
     $col2= $jsondata['listGrid']['rows'][$row][1];  // that is currently excecuting in the variable $row
     $col3= $jsondata['listGrid']['rows'][$row][2];
     $col4= $jsondata['listGrid']['rows'][$row][3];
     $col5= $jsondata['listGrid']['rows'][$row][4];
     $col6= $jsondata['listGrid']['rows'][$row][5];
     $col7= $jsondata['listGrid']['rows'][$row][6];
     $col8= $jsondata['listGrid']['rows'][$row][7];
     $col9= $jsondata['listGrid']['rows'][$row][8];

  }
  echo "</ul>";
                  //sql querry to insert data into the database
  $sql= " INSERT INTO practical SET 
                    col1 = '$col1',     
                    col2 = '$col2',  
                    col3 = '$col3',
                    col4 = '$col4',       
                    col5 = '$col5',
                    col6 = '$col6',
                    col7 = '$col7',
                    col8 = '$col8',
                    col9 = '$col9'
               ";
 $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 if($res==true){    
  echo"data inserted";
 }                          //checking if data is inserted into the database
 else{
  echo"failed to insert";
 }

}

?>

</body>
</html>