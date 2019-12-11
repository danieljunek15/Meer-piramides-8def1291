<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title> Bit Academy </title>
</head>

<body>

<form action="piramide.php">
<input type="number" name="input" placeholder="type a number betwean 1-10" min="1" max="100" id="num"> 
<input type="submit" value="Submit">
</form>
<h1 id="kleur">Piramide</h1>

<table cellspacing="0" cellpadding="0" >

    <?php

    $input = $_GET["input"];

    for($i=1; $i <=$input; $i++){
        echo "<tr>";
        for($I=1; $I <=$i; $I++){
            echo "<td width=20px height=20px bgcolor=#00000></td>";
        }
        echo "</tr>";
    }
        ?>

</tabel>
</body>
</html>