<?php
/**
* get the factorial of a number
* @param int $number
* @throws Exception
* @return int
*/
function getFactorialOfANumber($number)
{
    if(!preg_match('/^[\d]+$/', $number)) {
        throw new Exception('Please input a valid number');
    }

    //---base case
    if($number <= 1) {
        return 1;
    }

    //---recursion case
    $factorialNumber = $number * getFactorialOfANumber($number - 1);
    /**
    * if the $number is 5 then
    * on first loop / call it print 5 *
    * on 2nd call it print 4
    * on 3rd call it print 3 ....
    * like this final result will be 5*4*3*2*1
    */

    return $factorialNumber;
}

//---use the function
try {
    $factorial = getFactorialOfANumber(5.25);
    echo $factorial;
} catch(Exception $e) {
    echo $e->getMessage();
}
