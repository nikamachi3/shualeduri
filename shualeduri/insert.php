<?php
   include "index.php";
   if(isset($_POST['insertbutton'])){
      $dasaxeleba = $_POST['Dasaxeleba'];
      $ganmarteba = $_POST['Ganmarteba'];
      $komentari = $_POST['Komentari'];
      $sql =  "INSERT INTO recipe (Dasaxeleba, Ganmarteba, Komentari)
               VALUES (
                  '$dasaxeleba', 
                  '$ganmarteba', 
                  '$komentari')";
      mysqli_query($conn, $sql);  
   }          
?>
   <div class="charcho">
     <h1>INSERT</h1>
     <form action="" style="padding:20px" method="post">
         <input type="text" name="Dasaxeleba" placeholder="Dasaxeleba">
         <br>
         <br>
         <br>
         <textarea name="Ganmarteba" placeholder="Ganmarteba" cols="20" rows="10"></textarea>
         <br>
         <br>
         <br>
         <textarea name="Komentari" placeholder="Komentaria" cols="40" rows="20"></textarea>
         <br>
         <br>
         <input type="submit" name="insertbutton" value="INSERT">
     </form>
   </div>