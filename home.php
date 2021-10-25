<?php
if (isset($_POST["submit"]))
{
    $file_url = $_POST["file_url"];
    $file_name = $_POST["file_name"];

    if (filter_var($file_url, FILTER_VALIDATE_URL))
    {
        $pathinfo = pathinfo($file_url);
        if (isset($pathinfo["extension"]))
        {
            $file_name .= "." . $pathinfo["extension"];
            $file_content = file_get_contents($file_url);
            $fopen = fopen("maths/" . $file_name, "w");
            $fwrite = fwrite($fopen, $file_content);
            fclose($fopen);
            if ($fwrite)
            {
                $msg["success"] = "File Uploaded Successfully.";
                $_POST["file_url"] = "";
                $_POST["file_name"] = "";
            }
            else
            {
                $msg["error"] = "Something wrong went. Please try again.";
            }
        }
        else
        {
            $msg["error"] = "Please enter a file URL.";
        }
    }
    else
    {
        $msg["error"] = "Please enter a valid URL.";
    }
}
?> 
                                                                                                                     

<!DOCTYPE html> <!-- Code by Pure Coding Website: https://akhfasoft.net/ YouTube: https://youtube.com/PureCoding --> 
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>maths</title>
   </head>
   <body>
      <div class="container">
         <div class="remote-upload">
            <h2 class="title">maths</h2>
            <?php if (isset($msg["success"])) { ?> 
            <p style="color:green;margin-bottom: 1rem;"><?php echo $msg["success"]; ?></p>
            <?php } ?> 
            <form action="" method="post">
               <div class="inputBox"> <label for="file_url" class="form-label">File URL</label> <input type="text" id="file_url" class="form-control" name="file_url" placeholder="e.g. https://example.com/filename.zip" value="<?php if (isset($_POST["file_url"])) { echo $_POST["file_url"]; } ?>" required /> <?php if (isset($msg["error"])) { ?> <small style="color:red;"><?php echo $msg["error"]; ?></small> <?php } ?> </div>
               <div class="inputBox"> <label for="file_name" class="form-label">File Name</label> <input type="text" id="file_name" class="form-control" name="file_name" value="<?php if (isset($_POST["file_name"])) { echo $_POST["file_name"]; } ?>" placeholder="e.g. My File" required /> </div>
               <div class="inputBox"> <button class="btn" name="submit" type="submit">Upload Now!</button> </div>
            </form>
         </div>
      </div>
   </body>
</html>

<br></br><br></br><br></br>
<?php
if (isset($_POST["submit"]))
{
    $file_url = $_POST["file_url"];
    $file_name = $_POST["file_name"];

    if (filter_var($file_url, FILTER_VALIDATE_URL))
    {
        $pathinfo = pathinfo($file_url);
        if (isset($pathinfo["extension"]))
        {
            $file_name .= "." . $pathinfo["extension"];
            $file_content = file_get_contents($file_url);
            $fopen = fopen("chemistry/" . $file_name, "w");
            $fwrite = fwrite($fopen, $file_content);
            fclose($fopen);
            if ($fwrite)
            {
                $msg["success"] = "File Uploaded Successfully.";
                $_POST["file_url"] = "";
                $_POST["file_name"] = "";
            }
            else
            {
                $msg["error"] = "Something wrong went. Please try again.";
            }
        }
        else
        {
            $msg["error"] = "Please enter a file URL.";
        }
    }
    else
    {
        $msg["error"] = "Please enter a valid URL.";
    }
}
?> 
                                                                                                                     

<!DOCTYPE html> <!-- Code by Pure Coding Website: https://akhfasoft.net/ YouTube: https://youtube.com/PureCoding --> 
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>chemistry</title>
   </head>
   <body>
      <div class="container">
         <div class="remote-upload">
            <h2 class="title">chemistry</h2>
            <?php if (isset($msg["success"])) { ?> 
            <p style="color:green;margin-bottom: 1rem;"><?php echo $msg["success"]; ?></p>
            <?php } ?> 
            <form action="" method="post">
               <div class="inputBox"> <label for="file_url" class="form-label">File URL</label> <input type="text" id="file_url" class="form-control" name="file_url" placeholder="e.g. https://example.com/filename.zip" value="<?php if (isset($_POST["file_url"])) { echo $_POST["file_url"]; } ?>" required /> <?php if (isset($msg["error"])) { ?> <small style="color:red;"><?php echo $msg["error"]; ?></small> <?php } ?> </div>
               <div class="inputBox"> <label for="file_name" class="form-label">File Name</label> <input type="text" id="file_name" class="form-control" name="file_name" value="<?php if (isset($_POST["file_name"])) { echo $_POST["file_name"]; } ?>" placeholder="e.g. My File" required /> </div>
               <div class="inputBox"> <button class="btn" name="submit" type="submit">Upload Now!</button> </div>
            </form>
         </div>
      </div>
   </body>
</html>

<br></br><br></br><br></br>
<?php
if (isset($_POST["submit"]))
{
    $file_url = $_POST["file_url"];
    $file_name = $_POST["file_name"];

    if (filter_var($file_url, FILTER_VALIDATE_URL))
    {
        $pathinfo = pathinfo($file_url);
        if (isset($pathinfo["extension"]))
        {
            $file_name .= "." . $pathinfo["extension"];
            $file_content = file_get_contents($file_url);
            $fopen = fopen("physics/" . $file_name, "w");
            $fwrite = fwrite($fopen, $file_content);
            fclose($fopen);
            if ($fwrite)
            {
                $msg["success"] = "File Uploaded Successfully.";
                $_POST["file_url"] = "";
                $_POST["file_name"] = "";
            }
            else
            {
                $msg["error"] = "Something wrong went. Please try again.";
            }
        }
        else
        {
            $msg["error"] = "Please enter a file URL.";
        }
    }
    else
    {
        $msg["error"] = "Please enter a valid URL.";
    }
}
?> 
                                                                                                                     

<!DOCTYPE html> <!-- Code by Pure Coding Website: https://akhfasoft.net/ YouTube: https://youtube.com/PureCoding --> 
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>physics</title>
   </head>
   <body>
      <div class="container">
         <div class="remote-upload">
            <h2 class="title">physics</h2>
            <?php if (isset($msg["success"])) { ?> 
            <p style="color:green;margin-bottom: 1rem;"><?php echo $msg["success"]; ?></p>
            <?php } ?> 
            <form action="" method="post">
               <div class="inputBox"> <label for="file_url" class="form-label">File URL</label> <input type="text" id="file_url" class="form-control" name="file_url" placeholder="e.g. https://example.com/filename.zip" value="<?php if (isset($_POST["file_url"])) { echo $_POST["file_url"]; } ?>" required /> <?php if (isset($msg["error"])) { ?> <small style="color:red;"><?php echo $msg["error"]; ?></small> <?php } ?> </div>
               <div class="inputBox"> <label for="file_name" class="form-label">File Name</label> <input type="text" id="file_name" class="form-control" name="file_name" value="<?php if (isset($_POST["file_name"])) { echo $_POST["file_name"]; } ?>" placeholder="e.g. My File" required /> </div>
               <div class="inputBox"> <button class="btn" name="submit" type="submit">Upload Now!</button> </div>
            </form>
         </div>
      </div>
   </body>
</html>
