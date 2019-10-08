<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h1>PHP examples DZ</h1>
    <?php
        const MYSECRET = "foobar";
        $myname = "DZ";
        $mynum = 23;
        echo "<div> Hello $myname, your number is $mynum. Your secret is "
        . MYSECRET .
        " Thank You!<div>";
   
    ?>
<main>main main main</main>
<footer> Designed by <?php echo $myname; ?> </footer>
</body>
</html>