<?php
if(isset($_POST['submit'])){
    
     
}else{
    echo "Your name are could't submit";
}


?>  

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hero">
        <?php     
        echo  $_POST['name'];
         ?>
    </h1>
    <div class="container">
        <div class="holder">
            <form action="input.php" method="POST">
                <div class="wrapper">
                    <input type="text" placeholder="Enter Username" name="name">
                </div>
                <br> <br>
                <div class="wrapper">
                    <input type="submit" value="submit" name="submit">
                </div>

            </form>
        </div>
    </div>

    <h4 class="footer">My First PHP Project</h4>
    
</body>
</html>
