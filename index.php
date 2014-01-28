<?php
// Above is a php start tag. 

// Below is a php closing tag. Inbetween these tags you can write php code.
?>

Outside of the tags is just normal text.

<?php
/* 
This is a multi-line comment. 
When the server runs the program it will ignore anything that have been marked as a comment. 
Comments let you make notes in your code so it's easier to read, or turn off parts of code without deleting it. 
*/

// This is a single line comment. Same thing, only with one line.

// Variables. They're important.
$variable; // This is a variable.

/*
There are a few rules for naming variables.
In php all variables have to start with a $. 
The name can't start with a number, so no $1variable. 
$variable1 is fine, but numbers are generally discouraged.
Most special characters (@,!,#,etc) are banned, so no $c@t.
You can't use spaces, so some people like to use underscores instead, like $variable_one.
I prefer using "Camel Case" which looks like $itHasHumps.
*/

// Variables store information. There are different kinds of variables for different kinds of information.

// Strings store bits of text. You can write a string with quotes.
$string = 'Some text.'; 
// Or double quotes
$string = "More text";
// Sometimes you need one kind of quote inside of another.
$string = "Quotes \"Quotes\" Quotes";




?>