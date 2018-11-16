<?php

define('FOO', 'bar');
echo FOO;

$someNumber = 123; //integer
$someFloat = 3.14; //float
$someText = 'foo'; //string
$someLongText = 'asdfrjf
grjdgf
fjgdtd
dgfjg';
$someTrue = true; //boolean
$someNothing = null; // null
$someArray = [
    'asd',
    'sad',
    true,
    123
]; //array
echo $someArray[1];

$someAssociativeArray = [
    5=> 'foo',
    6=> 'bar',
    'baz' => 'biz'
];  //asociativs masiivs

$person = [
    'name' => 'John',
    'lastName' => 'Doe',
    'age' => '21'
];
echo $person['age'];

$someMultiDimenssionalArray = [
    [
        'name' => 'John',
        'lastName' => 'Doe',
        'age' => '21'
    ],
    [
        'name' => 'John',
        'lastName' => 'Doe',
        'age' => '21'
    ]
    ];
    echo $someMultiDimenssionalArray[1]['lastName'];
    $someMultiDimenssionalArray[] = [  //// ja noradisim indexu - pamainis indexa saturu
        
            'name' => 'Billy',
            'lastName' => 'Doe',
            'age' => '21'
        ];

        // + , - , / , * , % 
        // konkatinacija notiek ar punktu  piem. echo 'foo' . 'bar'
        echo '1 + 1'; //2
        echo '1 . 1'; // 11
    
       // $num = 1;
       // $num++;
        //--num;
       // $num += 2;

        //==
        //!=
        //<
        //>
        //<=
        //>=

        // ===
        //!==

        // mainigie sakas VNM ar $ 

        $num1 = 1;
        $num2 = 2;
        if ($num1 == 1 || $num2 == 2){
        } else{
        }

       // switch ($variable) {
       //     case 'value':
       //     #code...
       //     break;
       // }

        //while(true) {

        //} 

        // do {

        // } while(false);

        for ($i=0;$i <10; $i++) {
            echo $i . '<br>';
        }

        for ($i= 0; $i <= 30; $i++){
            if ($i % 2 == 0 && $i %3 == 0){
                echo 'Fizz Bazz' . '<br>';
            } 
            else if ($i % 2 == 0) {
                echo 'Fizz' . '<br>';
            }
            else if ($i % 3 ==0) {
                echo 'Bazz' . '<br>';
            }
            else
            {echo $i . '<br>';}
        }

        $foo = 'RTU is amazing';
        echo str_replace('RTU', 'RCS', $foo);
        
        $string = 'abcdef';
        $array = str_split($string);
        $backToString = implode('',$array);
        //var_dump($backToString);
        
        // int (float) -> str
        echo 123 . '';

        // str -> int
        echo intval('123aa1');
        echo floatval('3.14aa1');

        function addTwoNumbers(int $num1, int $num2=10): int // aiz kola definets return type (nav obligati)
        {
          return $num1 + $num2;
        }
        echo '<br><br><br>';
        echo addTwoNumbers(1,2) . '<br>' ;
        echo addTwoNumbers(1);
