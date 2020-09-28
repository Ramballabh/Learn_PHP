<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    echo "<b>Hello"," Ram"."<br>";
    $x = 12+20;
    echo $x;
    define("tet",20,true);
    echo Tet;
    $y = 2*"12";
    echo $y;
    echo gettype($y);
    echo 1&&"24";
    $arr = array("Ram","krishna","Bankey","Bharat");
    echo "<br>";
    echo in_array("Ram",$arr);

    echo "<br>";
    //give index
    echo array_search('Bharat',$arr);

    //Associative array
    echo "<br>";
    $arr1 = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple','d' =>'grapes');
    echo array_search('apple',$arr1);

    //Array replace

    $fruit = ['orange','banana','apple',1=>'grapes'];
    $vege = ['carrot','pea','potato'];
    $newArray = array_replace($fruit, $vege);

    echo "<pre>";
    print_r($newArray);
    echo '</pre>';

    //Array replace recursive
    $array1 = array("a"=>array("red"),"b"=>array("green","pink"));
    $array2 = array("a"=>array("yellow"),"b"=>array("black"));
    $newArray1 = array_replace_recursive($array1,$array2);

    echo "<pre>";
    print_r($newArray1);
    echo '</pre>';

    //Array push and pop

    array_pop($fruit);

    echo "<pre>";
    print_r($fruit);
    echo '</pre>';

    array_push($fruit,"mango");

    echo "<pre>";
    print_r($fruit);
    echo '</pre>';

    //Array shift-remove the first element

    array_shift($fruit);

    echo "<pre>";
    print_r($fruit);
    echo '</pre>';

    //Array unshift-add to first pos

    array_unshift($fruit,"orange");

    echo "<pre>";
    print_r($fruit);
    echo '</pre>';

    //Array Merge


    $newMergeArray = array_merge($fruit,$vege);

    echo "<pre>";
    print_r($newMergeArray);
    echo '</pre>';


    //Array Combine

    $newCombineArray = array_combine($fruit,$vege);

    echo "<pre>";
    print_r($newCombineArray);
    echo '</pre>';

    //Array slice

    $newSliceArray = array_slice($fruit,1,2);

    echo "<pre>";
    print_r($newSliceArray);
    echo '</pre>';

    //Array splice -array_splice(array,start,length,array-II
    //Its change in existing array

    //Array Key  array_key,array_key_first(),array_key_exists(),arrray_key_last(),key_exists()


    ?>
</body>
</html>