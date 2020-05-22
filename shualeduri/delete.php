<?php
   include "index.php";
      $query = "SELECT ID, Dasaxeleba FROM recipe";
      $result = mysqli_query($conn, $query);
      if(isset($_GET['remove'])){
         // echo $_GET['remove'];
         $remove = $_GET['remove'];
         $delete_query = "DELETE FROM recipe WHERE ID='$remove'";
         mysqli_query($conn,  $delete_query);
      }  
?>
<article>
      <h1>DELETE</h1>
      <?php
         while($row = mysqli_fetch_assoc($result)){
            if($row["Dasaxeleba"]==""){
               $row["Dasaxeleba"] = "delete";
            }
            echo "<p><a href='?top=delete&remove=".$row["ID"]."'>".$row["Dasaxeleba"]."</a></p>";
         }
      ?>
</article>