<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <title>Profile</title>
    <style>
        
    </style>
    <link rel="stylesheet" href="/lab3/ci4/public/css/style.css">
    </head>
    <body>
        <div class="container">

            <div class="card">
                <div class="imgBx">
                    <img src="./webprof/elys.png" alt="prof pic" width="150" height="150">
                </a>
                <h2>elys <em>!</em></h2>
                <p>I am <strong>Erika Alessandra Daduya.</strong>
                    <br>You can call me <em><b>Elys.</b></em>
                    <br>I am in my 20th.
                </p>
                </div>  
            </div>

            <div class="card2">
                <div class="imgBx">
                    <img src="./icons/educicon.png" alt="educ" width="150" height="150">
                </a>
                <h2>education <em>!</em></h2>
                <p>Graduated from: <b>STI College – Global City</b> in <i>BGC</i>.
                    <br>Course: <i>BSIT - MI</i>
                    <br>I am a DOST scholar.
                </p>
                </div>  
            </div>

            <div class="card">
                <div class="imgBx">
                    <img src="./webprof/osamu.png" alt="likes" width="150" height="150">
                </a>
                <h2>interests <em>!</em></h2>
                <p>Games: <b>VALORANT</b>
                    <br>Music: Kpop, Alt R&B, Pop
                    <br>Libangan: watch (YT, reels, anime), play games, read
                </p>
                </div>  
            </div>

            <div class="card2">
                <div class="imgBx">
                    <img src="./webprof/ting.png" alt="life" width="147" height="147">
                </a>
                <h2>life <em>!</em></h2>
                <p>Dream(s): travel to <em>Greece</em>
                    <br>Pets: two (2) female dogs
                    <br>Goal(s): to be stable, to finish well
                    <br>Facts: doesn't like grass, likes mint choco, likes matcha
                </p>
                </div>  
            </div>
            
            <div class="quote">
                <h1><em>“Be brave. Take risks. Nothing can substitute experience.”</em></h1>
            </div>

            <div class="form">
                <div>
                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                    }
                }
                
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                    }
                }
                    
                if (empty($_POST["website"])) {
                    $website = "";
                } else {
                    $website = test_input($_POST["website"]);
                    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                    $websiteErr = "Invalid URL";
                    }
                }

                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }

                if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <p><span class="error">* required field</span></p>
                <form method="post" action="submit.php">  
                Name: <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
                <br><br>
                Website: <input type="text" name="website" value="<?php echo $website;?>">
                <span class="error"><?php echo $websiteErr;?></span>
                <br><br>
                Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                <br><br>
                Gender:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
                <span class="error">* <?php echo $genderErr;?></span>
                <br><br>
                <input type="submit" name="submit" value="Submit">  
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>
                </div>  
            </div>
            
        </div>
    </body>
</html>
