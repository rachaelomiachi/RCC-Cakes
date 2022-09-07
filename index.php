<?php

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAYZ CAKES AND CONFECIONARIES</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--------------- form starts here------ -->
    <div  class="sa">
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

          <input type="text" name="firstname" id="form" placeholder="firstname" required>
          <span class="error">* <?phpif(isset($firstnameErr)) echo $firstnameErr;?></span>
<!-- <br><br> -->
       
        <input type="text" name="surname" id="form" placeholder="surname" required>
        <br>
        <span class="error">* <?php if(isset($firstnameErr))echo $surnameErr;?></span>
<!-- <br><br> -->
        <input  style="width: 170px" type="date" name="ordering date" id="form" placeholder="ordering date" required>
        <span class="error">* <?phpif(isset($firstnameErr)) echo $ordering_dateErr;?></span>
<!-- <br><br> -->
        <input style="width: 170px" type="date" name="delivery date" id="form" placeholder="delivery date" required>
        <br>
        <span class="error">* <?phpif(isset($deliveryErr)) echo $delivery_dateErr;?></span>
<!-- <br><br> -->
        <input type="text" name="flavour" id="form" placeholder="prefered flavour" required>
        <span class="error">* <?phpif(isset($firstnameErr)) echo $flavourErr;?></span>

        <input type="text" name="cake size" id="form" placeholder="cake size" required>
        <span class="error">* <?phpif(isset($firstnameErr)) echo $cakesizeErr;?></span>
<!-- <br><br> -->
        <br>
        <br>
        <button class="submit">submit</button>
 <br><br> 
        Welcome <?php echo $_POST["surname"]; ?><br>
Your deliverydate  is: <?php echo $_POST["deliverydate"]; ?>
Your prefared flavour is: <?php echo $_POST["flavour"]; ?>

        </form>
    </div>
</body>
</html>