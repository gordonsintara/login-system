
<!DOCTYPE html>

<?php 
    require_once 'includes/header.php';



    
//body start below
  
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0){
            while ($row = mysqli_fetch_assoc($result) ){
                echo $row['username']."<br>";
            }
        }else{
            echo "No results found";
        }
    
        require_once 'includes/footer.php';
    
    ?>
        