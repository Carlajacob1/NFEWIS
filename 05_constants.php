<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Constants
    define("ONE", 1);
    define("VAPOREON", "Hey guys, did you know that in terms of human power vaporeon is the most strong creature in the universe");
    print "Constant ONE: ";
    print constant("ONE");
    print "<br>";
    print constant("VAPOREON");
    print "<br>";

    //Constants with array
    define("SENTENCE", ["this", "is", "a", "sentence"]);
    function sentence(){
        //using if-else

        /*STATIC $x = 0;
        if($x == 4){
            print "<br>";
        }
        else{
            pring SENTENCE[$x];
            print " ";
            $x++;
        }*/

        //using for
        for($x =0; $x < 4; $x++){
            print SENTENCE[$x];
            print " ";
            if($x ==3)
            print "<br>";
        }
    }
    sentence();

    //Magic constants
    print __LINE__;
    print "<br";
    print __FILE__;
    ?>
</body>
</html>