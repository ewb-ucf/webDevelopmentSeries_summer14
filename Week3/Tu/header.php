<?php

$name = "Josh Kaplan";  // replace this with your name
$ubuntu_font = "<link href='http://fonts.googleapis.com/css?family=Ubuntu' 
                    rel='stylesheet' type='text/css'>";


/*
 * This is an example of a php function. Functions can be used to write
 * a piece of code that might be needed many times. In this case, we create
 * a function called 'spaces' to output html spaces and save ourselves the 
 * trouble of typing the html &nbsp; when we want to insert a space.
 *
 * Notice inside the parenthesis the variable $N. This is parameter or input 
 * variable of the spaces function. We can use it to tell the function how many
 * space we want to create.
 *
 * str_repeat is another function, it comes built in to PHP
 */

function spaces($N)
{
    return str_repeat('&nbsp;', $N);
}


?>