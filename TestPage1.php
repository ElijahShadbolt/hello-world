<!DOCTYPE html>
<html>
    <head>
        <title>TestPage1</title>
        <style>
            .error {
                color: #F00;
            }
        </style>
    </head>
    <body>
        
        <?php
        // define variables and set to empty values
        $titleErr = $dateErr = "";
        $title = $date = $content = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if (empty($_POST["title"])) {
                $titleErr = "Title is required";
            }
            else
            {
                $title = test_input($_POST["title"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $titleErr = "Only letters and white space allowed"; 
                }
            }
            
            if (empty($_POST["date"]))
            {
                $dateErr = "Date is required";
            }
            else
            {
                $date = test_input($_POST["date"]);
            }

            if (empty($_POST["content"]))
            {
                $content = "";
            }
            else
            {
                $content = test_input($_POST["content"]);
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        <h1>Header</h1>
        <p>Paragraph</p>
        <p>Hthioad</p>
        
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            Title: <input type="text" name="title" value="<?php echo $title;?>">
            <span class="error">* <?php echo $titleErr;?></span>
            
            Date: <input type="date" name="date" value="<?php echo $date;?>">
            <span class="error">* <?php echo $dateErr;?></span>
            
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
        
    </body>
</html>