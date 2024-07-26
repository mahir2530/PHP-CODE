<?php
$character = 'a'; // Replace with the character you want to check

$vowels = ['a', 'e', 'i', 'o', 'u'];

if (in_array($character), $vowels) {
    echo "$character is a vowel.";
} else {
    echo "$character is a consonant.";
}
?>
