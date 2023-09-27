<?php 

//Task 1: String Manipulation
/*Create a string variable called $text 
with the value "The quick brown fox jumps over 
the lazy dog.". 
Write a PHP function 
which takes "$text" as an argument to:

Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text.

*/

          /*Solution of Task 1:   */

echo "\n\n<br>";
echo "==> Task-1===>\n";
echo "\n\n";

$text = "The quick brown fox jumps over 
the lazy dog.";

function modifiedText($Text) {
    // Converting the string to all lowercase.
    $lowercaseText = strtolower($Text);

    // Replacing "brown" with "red" in the string.
    $replacedText = str_replace("brown", "red", $lowercaseText);

    
    echo $replacedText;
}


modifiedText($text);

echo "\n\n<br>";


//Task 2: Array Manipulation


/*Create an array called $numbers 
containing the numbers 1 to 10. 
Wn rite a PHP function which takes the "$numbers" array 
as an argument to remove the even numbers 
from the array and print the resulting array.*/

echo "\n\n<br>";
echo "==> Task-2===>\n";
echo "\n\n";
            /*Solution of Task 2:   */

$numbers = range(1, 10);  //taken as an argument of notEvenNumbers().
//print_r($numbers);
function notEvenNumbers($numbers){
  return $numbers % 2 == 1;
  }

$afterRemovedArray = array_filter($numbers, "notEvenNumbers");
print_r($afterRemovedArray);  //Resulting array (after removing the even numbers).

echo "\n\n<br>";
//Task 3: Array Sorting  

/*Create an array called $grades 
with the following values: 85, 92, 78, 88, 95. 
Write a PHP function which takes "$grades" 
as an argument to sort the array in descending order 
and print the sorted grades as array.*/

echo "\n\n<br>";
echo "==> Task-3===>\n";
echo "\n\n";
              /*Solution of Task 3:   */

$grades=[85, 92, 78, 88, 95];

function descendingArray($grades){
  rsort($grades);
  print_r($grades);
}
descendingArray($grades);  /*Sorted grades as array in descending order (where "$grades" is taken
as an argument)*/
echo "\n\n<br>";

//Task 4: Multidimensional Array


/*Create a multidimensional array called $studentGrades 
to store the grades of three students. 
Each student has grades for three subjects: Math, English, 
and Science. Write a PHP function 
which takes "$studentGrades" as an argument to calculate 
and print the average grade for each student.*/

echo "\n\n<br>";
echo "==> Task-4===>\n";
echo "\n\n<br>";
              /*Solution of Task 4:   */

$studentGrades = [
  ['Math' => 60, 'English' => 55, 'Science' => 75],
  // Supposing grades of Student-1
  ['Math' => 85, 'English' => 60, 'Science' => 80],
  // Supposing grades of Student-2
  ['Math' => 70, 'English' => 70, 'Science' => 90],
  // Supposing grades of Student-3
];


function AverageGrades($gradesArray)
{
  foreach ($gradesArray as $studentIndex => $grades) {
    $total = array_sum($grades);
    $subjectCount = count($grades);
    $average = $total / $subjectCount;

    echo "Student " .($studentIndex + 1) . " :  Average Grade: " . $average ."\n<br>";
  }
}


AverageGrades($studentGrades);  //taking "$studentGrades" as an argument

echo "\n\n<br>";
//Task 5: Password Generator


/*Create a PHP function called generatePassword($length) 
that generates a random password of the specified length.
The password should include lowercase letters, 
uppercase letters, numbers, and special characters 
(!@#$%^&*()_+). Write a PHP program to generate a password 
with a length of 12 characters using this function 
and print the password.
*/

echo "\n\n<br>";
echo "==> Task-5===>\n";
echo "\n\n";
                /*Solution of Task 5:   */
function generatePassword($length) {
    
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combined character sets 
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initializing the password variable
    $password = '';

    // Generating the random password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Supposing a password with a length of 12 characters
$generatedPassword = generatePassword(12);

echo "Generated Password: " . $generatedPassword . "\n";
?>