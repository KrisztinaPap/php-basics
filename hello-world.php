<?php // All PHP code must be inside <?php tags!
// Echo and print are functions we can use to output strings as a response.
# This is also a single line comment
/*  This 
    is
    a
    multi-line
    comment */
    echo "Hello World!";

    $studentName = "Fahad";
    echo $studentName;
   
    $studentName2 = "Atinder";
    
    echo "\n\n Two students in TECHCareers are:\n- $studentName\n- $studentName2.";

    echo "\n\nThis string is being " . 'concatenated!';

    // DATA TYPES
    // Strings
    $string1 = 'I\'m a string!';
    $string2 = 'I\'m also a string!';

    // Integers
    $int1 = -26;
    $int2 = 42;

    // Floats / Doubles
    $float1 = 3.14;
    $float2 = -29.54;

    // Booleans
    $bool1 = TRUE;
    $bool2 = false;

    // Arrays
    // Indexed arrays
    $array1 = [ 'First value', 17, 16.8, FALSE ];
    $array2 = array( 'First value', 17, 16.8, FALSE );

    // Associative arrays
    $array3 = array(
        'key' => 'value',
        'name' => 'George',
        'age' => 42
    );

    // Objects
    $object = new stdClass();
    $object->name = 'TECHCareers';
    $object->cohort = 4.2;
    $object->year = 2020;
    echo "\n\n$object->name" . ' | ' . $object->cohort . ' | ' . $object->year;

    $myNullVar = NULL;

    // LOOPS!

    for ( $iterator = 0; $iterator < 10; $iterator += 2 )
    {
        echo "\nOur for loop is on iteration: $iterator";
    }

    // Associative array
    $students = [
        'Danish' => 'Reading',
        'Eboka' => 'Reading',
        'Birm' => 'Watching tennis',
        'Adolf' => 'Playing Music',
        'Kenji' => 'Rock climbing',
        'Fahad' => "Gaming"
    ];

    // foreach loop
    // (ARRAY as KEY => VALUE)
    foreach ( $students as $name => $hobby )
    {
        echo "\n - Hi, my name is $name! I like $hobby.";
    }

    // While loop
    $i = 12;
    while ( $i > 2)
    {
        echo "\nOur for loop is on iteration: $i";
        $i --;
    }

    function addition ( $num1, $num2 )
    {
        return $num1 + $num2;
    }

    echo "\n";
    echo addition ( 5, 10 );    
    echo "\nADDITION RESULT: " . addition ( "23", 3);
    echo "\nADDITION RESULT: " . addition ( "5hi", 3);

    $myFunctionResult = addition(2, 2);
    echo "\nResult from variable: $myFunctionResult";
?>

