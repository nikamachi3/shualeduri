<?php
    $query = "SELECT * FROM recipe";
    $result = mysqli_query($conn, $query);
    if(!$result){
       die ("Error!!"); 
    }  
    while($row = mysqli_fetch_assoc($result)){
        echo "<li><a href='?press=".$row["Dasaxeleba"]."'>".$row["Dasaxeleba"]."</a></li>";
     }

     
?>

<?php
    echo $_GET["press"];
    $press = $_GET["press"];
    $query = "SELECT * FROM recipe WHERE Dasaxeleba='$press'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<div>
 <?=$row['Ganmarteba']?>
</div>
<div>
<?=$row['Komentari']?>
</div>