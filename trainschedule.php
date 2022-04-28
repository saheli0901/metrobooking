<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

  <div>

  </div>
<style>

table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}


</style>


<head>  
           <title>METRO TICKET DATABASE</title>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body >  
                     <h2><center><b><img src="https://img.icons8.com/officel/70/000000/overtime.png"/>&nbsp&nbspAirport TO Vadapalani TRAIN SCHEDULE&nbsp&nbsp<img src="https://img.icons8.com/officel/70/000000/overtime.png"/></center></b></h2>

           <div class="container">  
                <br />  
                     <table id="database_table" class="table table-striped table-bordered">  
                          <thead>  
                            <tr>
  <th>Airport </th>
  <th>Egmore </th>
  <th>Arumbakkam</th>
  <th>Anna Nagar East</th>
  <th>Anna Nagar Tower</th>
  <th>Government Estate</th>
  <th>Nerul </th>
  <th>Koyambedu</th>
  <th>Mannadi</th>
  <th>Meenambakkam</th>
  <th>Nehru Park</th>
  <th>Shenoy Nagar </th>
  <th>Tollgate Metro</th>
  <th>Vadapalani</th>

  </tr>  
                          </thead>  
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `traintt`   " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){
    echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Airport"].'</td>
        <td>'.$row["Egmore"].'</td>
        <td>'.$row["Manasarovar"].'</td>
        <td>'.$row["Anna Nagar East"].'</td>
        <td>'.$row["Anna Nagar Tower"].'</td>
        <td>'.$row["Government Estate"].'</td>
        <td>'.$row["Nerul"].'</td>
        <td>'.$row["Koyambedu"].'</td>
        <td>'.$row["Mannadi"].'</td>
        <td>'.$row["Meenambakkam"].'</td>
        <td>'.$row["Nehru Park"].'</td>
        <td>'.$row["Shenoy Nagar"].'</td>
        <td>'.$row["Tollgate Metro"].'</td>
        <td>'.$row["Vadapalani"].'</td>';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} ); 
 </script>  
<?php include 'footer.php';
?> 