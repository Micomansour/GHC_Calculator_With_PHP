<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>GHC Practical Exercise</title>
</head>
<body>
    <div class="container">
        <div class="opration-form">
            <form action="includes/oparation.php" method="post">
                <div class="form-title">
                    <p>Create your interval</p>
                </div>
                <div class="form-inputs">
                    <label for="first number">Starting point </label>
                    <input type="number" name="starting" required >
                </div>      
                <div class="form-inputs">
                    <label for="second number">Ending point </label>
                    <input type="number" name="ending" required >
                </div>   
                <div class="form-inputs">
                    <button type="submit" name="send">Send</button>
                </div>             
            </form>
        </div>
    </div>
</body>
</html>