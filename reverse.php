<?php
/*Write a reverse function not using any of the existing PHP reversal functions*/

#This function will use recursion to accept a string/numeric value and return that value in reverse order
function reverse($value) {
    if(strlen($value) <= 1) // First we get the base case - when the paramater is 1 character in length there is nothing to reverse
        return $value;
    return  substr($value,-1) . reverse(substr($value,0,strlen($value)-1)); //Beautiful recursion
    // Normally the return statement would end function execution and jump back to the function call.
}

echo reverse("hello world!"); /* !dlrow olleh */
echo "<br>"; //HTML breakline
echo reverse(1234); /* 4321 */
?>