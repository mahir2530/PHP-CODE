<?php
$character = str(input("enter vowels :);

$vowels = ['a', 'e', 'i', 'o', 'u'];

if (in_array(strtolower($character), $vowels)) {
    echo "$character is a vowel.";
} else {
    echo "$character is a consonant.";
}
?>
