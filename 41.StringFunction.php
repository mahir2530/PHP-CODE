<?php

// 1. strlen
$str = "hello,world!";
echo "Length of string: " . strlen($str) . "<br>"; // Outputs: Length of string: 13

// 2. str_word_count
echo "Word count: " . str_word_count($str) . "<br>"; // Outputs: Word count: 2

// 3. strpos
$position = strpos($str, "world");
if ($position !== false) {
    echo "'world' found at position: " . $position . "<br>"; // Outputs: 'world' found at position: 6
} else {
    echo "'world' not found<br>";
}

// 4. str_replace
$newStr = str_replace("world", "PHP", $str);
echo "Replaced string: " . $newStr . "<br>"; // Outputs: Replaced string: hello, PHP!

// 5. substr
$substring = substr($str, 7, 5);
echo "Substring: " . $substring . "<br>"; // Outputs: Substring: world

// 6. strtolower
$lowercaseStr = strtolower($str);
echo "Lowercase string: " . $lowercaseStr . "<br>"; // Outputs: Lowercase string: hello, world!

// 7. strtoupper
$uppercaseStr = strtoupper($str);
echo "Uppercase string: " . $uppercaseStr . "<br>"; // Outputs: Uppercase string: HELLO, WORLD!

// 8. trim
$strWithSpaces = "   hello, world!   ";
$trimmedStr = trim($strWithSpaces);
echo "Trimmed string: '" . $trimmedStr . "'<br>"; // Outputs: Trimmed string: 'hello, world!'

// 9. ltrim
$ltrimmedStr = ltrim($strWithSpaces);
echo "Left trimmed string: '" . $ltrimmedStr . "'<br>"; // Outputs: Left trimmed string: 'hello, world!   '

// 10. rtrim
$rtrimmedStr = rtrim($strWithSpaces);
echo "Right trimmed string: '" . $rtrimmedStr . "'<br>"; // Outputs: Right trimmed string: '   hello, world!'

// 11. ucwords
$ucwordsStr = ucwords($str);
echo "Uppercase first letter of each word: " . $ucwordsStr . "<br>"; // Outputs: Uppercase first letter of each word: Hello, World!

// 12. ucfirst
$ucfirstStr = ucfirst($str);
echo "Uppercase first letter of string: " . $ucfirstStr . "<br>"; // Outputs: Uppercase first letter of string: Hello, world!
?>