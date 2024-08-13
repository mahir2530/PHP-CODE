<?php
echo "<pre>";

// 1. date() - Formats a local date and time
echo "Current Date (Y-m-d): " . date("Y-m-d") . "<br>"; // Example: 2024-08-01
echo "Current Time (H:i:s): " . date("H:i:s") . "<br>"; // Example: 14:05:09 (for 2:05 PM)
echo "Full Date and Time: " . date("Y-m-d H:i:s") . "<br>"; // Example: 2024-08-01 14:05:09

// 2. time() - Returns the current Unix timestamp
echo "Current Unix Timestamp: " . time() . "<br>"; // Example: 1727805609

// 3. mktime() - Returns the Unix timestamp for a given date
$timestamp = mktime(12, 0, 0, 8, 1, 2024);
echo "Timestamp for August 1, 2024, 12:00:00: " . $timestamp . "<br>"; // Example: 1727822400

// 4. strtotime() - Parses an English textual datetime description into a Unix timestamp
$nextMonday = strtotime("next Monday");
echo "Next Monday's Date: " . date("Y-m-d", $nextMonday) . "<br>"; // Example: 2024-08-05

// 5. date_timezone_set() - Sets the time zone for the DateTime object
$dateTime = new DateTime(); // Create a new DateTime object
date_timezone_set($dateTime, timezone_open("Europe/London")); // Set timezone to London
echo "DateTime in London Time Zone: " . date_format($dateTime, "Y-m-d H:i:s") . "<br>"; // Example: 2024-08-01 19:05:09

// 6. date_default_timezone_set() - Sets the default timezone used by all date/time functions in a script
date_default_timezone_set("Asia/Kolkata");
echo "Current Date and Time in Asia/Kolkata: " . date("Y-m-d H:i:s") . "<br>"; // Example: 2024-08-01 14:05:09

echo "Y: Full year (4 digits) - " . date("Y") . "<br>"; // Example: 2024
echo "y: Two-digit year - " . date("y") . "<br>";       // Example: 24
echo "m: Month with leading zeros - " . date("m") . "<br>"; // Example: 08 (for August)
echo "n: Month without leading zeros - " . date("n") . "<br>"; // Example: 8 (for August)
echo "M: Short month name - " . date("M") . "<br>";     // Example: Aug
echo "d: Day with leading zeros - " . date("d") . "<br>"; // Example: 01 (for the 1st)
echo "j: Day without leading zeros - " . date("j") . "<br>"; // Example: 1 (for the 1st)
echo "D: Short day name - " . date("D") . "<br>";       // Example: Mon
echo "l: Full day name - " . date("l") . "<br>";        // Example: Monday
echo "H: 24-hour format with leading zeros - " . date("H") . "<br>"; // Example: 14 (for 2 PM)
echo "h: 12-hour format with leading zeros - " . date("h") . "<br>"; // Example: 02 (for 2 PM)
echo "i: Minutes with leading zeros - " . date("i") . "<br>"; // Example: 05 (for 5 minutes past the hour)
echo "s: Seconds with leading zeros - " . date("s") . "<br>"; // Example: 09 (for 9 seconds past the minute)
echo "a: Lowercase am/pm - " . date("a") . "<br>";      // Example: pm
echo "A: Uppercase AM/PM - " . date("A") . "<br>";      // Example: PM
echo "L: Leap year? (1 or 0) - " . date("L") . "<br>";  // Example: 0 (if it's not a leap year)

echo "</pre>";
?>
