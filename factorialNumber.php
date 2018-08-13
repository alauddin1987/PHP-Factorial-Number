<?php
/**
* get the factorial of a given number
* @param int $number
* @throws Exception
* @return int
*/
function getFactorial($number)
{
  if(!preg_match('/^[1-9][0-9]*$/', $number)) {
     throw new Exception('The given number seems to be incorrect');
  }
 
  $factorail = 1;
  while($number > 1) {
     $factorail *= $number; 
     $number--;
  }
  
  return $factorail;
}

// use the function
try{
   $factorial = getFactorial('a');
   echo $factorial;
} catch(Exception $e) {
   echo $e->getMessage();
}
