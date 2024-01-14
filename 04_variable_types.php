<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //integers , doubles, booleans, strings
    $int_var = 123456;
    $double_var = 123.456;
    $null_var = NULL;
    $string_var = "this is a string";
    $string_var_2 = "the variable\"\#double_var\" contains $double_var";
    $string_var_2_single = 'the variable \"\$double_var\" contains $double_var';
    $string_var_3 = "B\nU\rN\tN";
    if($int_var){
        print "the boolean is true using \$int_var with a value of $int_var";
        print "<br";
    }
    else{
        print "the boolean is false";
        print "<br>";
    }
    print "$string_var<br>";
    echo "$string_var_2<br>";
    print "$string_var_2_single<br>";
    print "$string_var_3<br>";

    //local var
    function local_var(){
        $int_var = 9876;
        print "\$int_var inside function is $int_var<br>";
        
    }
    local_var();
    print "\$int_var inside fuction is $int_var<br>";
    
    //function parameters
    function adding($num){
        $num++;
        return $num;
    }
    $plus_one = adding(4);
    print "return value is $plus_one<br>";

    //global var
    function glob_var(){
        GLOBAL $int_var;
        print "\$int_var is now $int_var<br>";
    }
    glob_var();
    print "\$int_var is still $int_var<br>";

    //static var
    function countdown(){
        STATIC $count = 10;
        $count--;
        print "Countdown in $count<br>";
    }
    countdown();
    countdown();
    countdown();
    countdown();
    countdown();
    countdown();
    countdown();
    ?>
</body>
</html>