<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "This is an overview of the syntax.<br>";
    //this is a single line comment
    /*

    qwkeqwkeolqkwoekqok
    this is a multi line comment
    programmercoderetc

    */
    /*
    things to remember:
    - PHP is whitespace insensitive*/
    $sum = 1 + 1;
    $sum            =       1       +   1;
    $sum = 
    1+1;

    /*
    - it is case sensitive
    the variable $sum cannot be called if it is typed in this way:
        $SUM
    */
    $statement = "this is  a statement";

    //the following  is the same :
    if (TRUE)
        print "this is true<br>";
    if(TRUE){
        print "this is ";
        print "true<br>";
    }
    ?>
</body>
</html>