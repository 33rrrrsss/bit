<!DOCTYPE html>
<head>
    <title>Background Color Preferences</title>
</head>
<body>
    <h1>Background Color Preferences</h1>
    <?php
        //Check user has submitted the form or not
        if(isset($_POST["color"])&&isset($_POST["name"])){
            $backgroundColor=$_POST["color"];
            $name=$_POST["name"];

            //set the cookie
            setcookie("bg_color", $backgroundColor, time() + (24*60*60));
            setcookie("name",$name,time() + (24*60*60));


        }
        else{
            //check if background color is existed
            if(isset($_COOKIE["bg_color"])){
                $backgroundColor = $_COOKIE["bg_color"];
                $name = $_POST["name"];
            }
            else{
                $backgroundColor = "white";
                $name="";
            }
        }
        ?>

    <form method="post" action="set_cookies.php">
        <label for="color"> Your preferences:</label>
        <label for="name"> Your Name: </label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name);?>" required>
        <br>
        <select name="color" id="color">
            <option value="white" <?php echo ($backgroundColor=="white")?"selected":"";?>>White</option>
            <option value="lightblue"<?php echo ($backgroundColor=="lightblue")?"selected":"";?>>lightblue</option> <!-- can change to favourite color-->
            <option value="lightgreen"<?php echo ($backgroundColor=="lightgreen")?"selected":"";?>>lightgreen</option>
        </select>
        <input type="submit" value="Set Background Color">

        <div style="background-color: <?php echo $backgroundColor ?>; padding: 20px;">
            <p>This is the content area with a user-selected background color.</p>
        </div>

        <a href="other_page.php"><button>Go to Other page</button></a>
    </form>
</body>
</html>
