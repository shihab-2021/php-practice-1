<?php
    echo 'Hello World!' . '<br>';
    echo '<br>';

    $number1 = 10;
    $number2 = 9.40;

    $country = "Bangladesh";

    echo "First number is: $number1 and Second number is: $number2 <br>";
    echo "Country name is: $country <br>";

    echo "<br> ------------- Array ------------- <br><br>";

    $arr = array(5, 4, 2, 1, 3);
    array_push($arr, 6);

    echo "Normal output";
    for($i=0; $i<=5; $i++)
    {
        echo $arr[$i] . '<br>';
    }

    echo "<br> Sorted output with foreach loop <br>";
    sort($arr);
    foreach($arr as $value)
    {
        echo $value . '<br>';
    }

    echo '<pre>';
    print_r($arr);
    var_dump($arr);

    echo '<br>';
    $associative_arr = array('Mango'=>100, 'Orange'=>150, 'Banana'=>49);
    foreach($associative_arr as $key => $value)
    {
        echo "The value of $key is= $value <br>";
    }

?>
