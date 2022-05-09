<?php 
   include("./functions.php");
   $answer = 0 ;
   // default value for the first input is 0 when it is not set
   $firstInteger = isset($_POST["starting"]) ? $_POST["starting"]: 0 ;

   // default value for the second input is 0 when it is not set
   $secondInteger = isset($_POST["ending"]) ? $_POST["ending"]: 0 ;

   // caliculation
   $answer = calculation($firstInteger,$secondInteger);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>GHC Practical Exercise</title>
</head>
<body>
    <div class="container">
        <div class="opration-form answer">
            <div class="form-title">
                <p style="font-size: 16px !important;color: blue; "> Case: -30 and -60:  
                    <span>  <?= calculation(-30,-60) ?> </span> 
                </p>
            </div>
            <div class="form-title">
                <p style="font-size: 16px !important;color: blue; "> Case: 60 and 30:    
                    <span>  <?= calculation(60,30) ?>  </span>
                 </p>
            </div>
            <div class="form-title">
                <p style="font-size: 16px !important;color: blue; "> Case: 30 and 60:    
                    <span>  <?= calculation(30,60) ?>  </span>
                 </p>
            </div>
            <div class="form-title">
                <p style="font-size: 16px !important;color: blue; "> Case: 90 and 120:   
                    <span>  <?= calculation(90,120) ?>  </span>
                </p>
            </div>
            <div class="form-title">
                <p style="font-size: 16px !important;color: blue; "> Case: 110 and 120:  
                    <span>  <?= calculation(110,120) ?>  </span> 
                </p>
            </div>

            <div class="form-title inputs">
                <p style="font-size: 16px !important;color: rgb(112, 210, 235); "> Custom inputs value 
                    <span style="font-size: 16px !important;color: red; ">  <?= $answer ?>  </span> 
                </p>
            </div>
            <div class="form-title">             
                <a href="../index.php" style="font-size: 16px !important;color: rgb(112, 210, 235); ">Click here to set you custom value </a>
            </div>
        </div>
    </div>
</body>
</html>