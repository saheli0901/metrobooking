<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Metro Ticket Booking &nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>
 <form method='post' action ='book_action.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">SOURCE STATION :</label>    
       <select id="inputState" class="form-control" name="source">
   <option>Airport</option>
   <option>Egmore</option> 
   <option>Arumbakkam</option>
   <option>Anna Nagar East</option>
   <option>Anna Nagar Tower</option>
   <option>Government Estate</option>
   <option>Highcourt</option>
   <option>Koyambedu</option>
   <option>LIC</option>
   <option>Little Mount</option>
   <option>Mannadi</option>
   <option>Meenambakkam</option>
   <option>Nehru Park</option> 
   <option>Shenoy Park</option>
   <option>Tollgate Metro</option> 
   <option>Vadapalam</option>
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



          <div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> 
FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">
   
      <option>Airport</option>
   <option>Egmore</option> 
   <option>Arumbakkam</option>
   <option>Anna Nagar East</option>
   <option>Anna Nagar Tower</option>
   <option>Government Estate</option>
   <option>Highcourt</option>
   <option>Koyambedu</option>
   <option>LIC</option>
   <option>Little Mount</option>
   <option>Mannadi</option>
   <option>Meenambakkam</option>
   <option>Nehru Park</option> 
   <option>Shenoy Park</option>
   <option>Tollgate Metro</option> 
   <option>Vadapalam</option>
   </select> 

      <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
  </div>
  
 
   
    
      <br>
    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>

    

    <div>   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>
  


<?php include 'footer.php';
?> 

</body>
</html>