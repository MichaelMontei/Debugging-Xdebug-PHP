<?php
declare(strict_types=1);

echo "Exercise 1 starts here:";
function new_exercise() {
    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
//SOLUTION:
//PHP Warning: Undefined variable $x in /C:/xampp/htdocs/Debugging-Xdebug-PHP/expert.php on line 6
//Added variable $x


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
//$monday = $week[1];
$monday = $week[0];
echo $monday;

//SOLUTION:
//Changed the index of $week
//The code prints out tuesday instead of monday!


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = '` "Debugged !" `  Also very fun" `';
echo substr($str, 0, 16);

//SOLUTION:
//Looked up PHP substr
// Changed Debugged to literal and changed the length to 16

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);


new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter < 'z'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

//SOLUTION:
//Changed $letter '<=' to '<' in the for loop, printing out right now


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode("-", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames , $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))][rand(0, 10)];

    echo $randname;
}

echo "Here is the name: " . combineNames();

//SOLUTION:
//Checked PHP implode settings and changed them
//variable $heroes = changed
//Still getting error on line 102 - but prints the name


new_exercise(7);
function copyright($year): string
{
    return "&copy; $year BeCode";
}
//print the copyright
print copyright(date('Y'));


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return '';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

//SOLUTION:
//Changed || to && in the if statements to check if both conditions are correct
//Changed the return on the else to an empty string

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable)) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
isLinkValid("http://www.google.com/hack.pdf");
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i=0; $i <= count($areTheseFruits); $i++) {
    if(!array_filter($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this