<?php
    include ('index.php');
    if(isset($_POST['update'])){
        $id = $_POST["ID"];
        $query = "UPDATE recipe SET Dasaxeleba='$_POST[Dasaxeleba], Ganmarteba='$_POST[Ganmarteba]', Komentari='$_POST[Komentari]'";
        $result = mysqli_query($conn, $query);
        if($result){
            echo "Update ganxorcielda warmatebit";
        }
        else{
            echo "Update ver ganxorcielda ratomghac";
        }
    }
 
?>

<form action="" style="padding:20px" method="post">
    <input type="text" name="ID" placeholder="ID">
    <br>
    <br>
    <input type="text" name="Dasaxeleba" placeholder="Dasaxeleba">
    <br>
    <br>
    <textarea name="Ganmarteba" placeholder="Ganmarteba" cols="20" rows="10"></textarea>
    <br>
    <br>
    <textarea name="Komentari" placeholder="Komentari" cols="40" rows="20"></textarea>
    <br>
    <br>
    <input type="submit" name="update" value="UPDATE DATA">
</form>