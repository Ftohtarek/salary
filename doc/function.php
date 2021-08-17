<?php
function printArr($arr)
{

    echo "<pre>";
    echo "[" . count($arr) . "] ";
    print_r($arr);
    echo "</pre><br>";
}

function br()
{
    echo "<br>";
}
function hr()
{
    echo "<br>";
    echo "<hr>";
}

function addAssocArr(array $arr1, array $arr2)
{
    $arr = [];
    foreach ($arr1 as $value) {
        $arr[] = $value;
    }
    foreach ($arr2 as $value) {
        $arr[] = $value;
    }
    return $arr;
};
function addAssocArrWithoutRepeatName(array $arr1, array $arr2)
{
    $arr = addAssocArr($arr1, $arr2);
    $data = $arr;
    foreach ($arr1 as $key1 => $value1) {
        foreach ($arr2 as $key => $value2) {
            if ($value1['name'] == $value2['name']) {
                // array_splice($data, $key1, 1);
                unset($data[$key1]);
            }
        }
    }
    return $data;
}

$arr = [
    [
        'name' => 'ftoh',
        'age' => 24,
    ],
    [
        'name' => 'tarek',
        'age' => 28,
    ],
    [
        'name' => 'othman',
        'age' => 24,
    ]
];
$arr1 = [
    [
        'name' => 'ahme',
        'age' => 24,
    ],
    [
        'name' => 'tarek',
        'age' => 244,
    ],
    [
        'name' => 'mohmed',
        'age' => 24,
    ]
];
// printArr(addAssocArrWithoutRepeatName($arr,$arr1));
