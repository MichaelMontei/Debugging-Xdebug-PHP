# Debugging-Xdebug-PHP
Exercise on Debugging code with Xdebug in PHPstorm

## Exercise 1

PHP Warning: Undefined variable $x in /C:/xampp/htdocs/Debugging-Xdebug-PHP/expert.php on line 6

>solution: Added variable $x
---

## Exercise 2 

Changed the index of $week cause debugger showed that index was wrong to print out monday.

>solution: Changes //$monday = $week[1]; into -> $monday = $week[0];
--- 

## exercise 3 

Looked up PHP substr, afterwards checked the $str variable to see if it was a literal.

>solution: Changed Debugged to a literal and changed the length to 16 at echo substr($str, 0, 16);
---

## exercise 4

Looked up foreach on PHP.net and noticed it was missing a character

>solution: Noticed that in the foreach there should be a & sign
---


## exercise 5

In the the for loop I changed the <= to <.

>solution: Changed $letter '<=' to '<' in the for loop, printing out right now
---

## exercise 6

This was Im losing alot of time on it and can't really find the solution yet.
Its' printing a name but not alwasy correct

>solution: Checked PHP implode settings and changed them, variable $heroes = changed. Still getting error on line 102 - but prints the name
---

## exercise 7

Debugger was complaining about the integer at Year inside the function. 

> solution: I removed the int at the copyright function. 
---

## exercise 8 

returnd 2 values and it was using OR instead of AND.

>solution: Changed || to && in the if statements to check if both conditions are correct. Also Changed the return on the else to an empty string.
---

## exercise 9 

First tried to print_r didn't return the right thing, then used echo + space.

>solution: Added echo before the function and used space between the strings.
---

## exercise 10

First tried with a function to compare the two arrays, was even further from the solution.
I checked array_filter on PHP and saw that it needed an array behind it and now it was only showing car.
Found in_array at PHP.net to check if a value exists in another array.

> solution :  count($areTheseFruits) +1 and if(in_array
---

# End
