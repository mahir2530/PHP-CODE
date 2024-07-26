<?php
$emails = [
    'user1@example.com',
    'user2@example.com',
    'user1@example.com',
];

// Initialize arrays to store email counts and non-unique emails
$emailCounts = [];
$nonUniqueEmails = [];

// Count occurrences of each email address
foreach ($emails as $email) {
    if ($emailCounts[$email]) {
        $emailCounts[$email]++;
    } else {
        $emailCounts[$email] = 1;
    }
}

// Identify email addresses that appear more than once
foreach ($emailCounts as $email => $count) {
    if ($count > 1) {
        $nonUniqueEmails[] = $email;
    }
}

// Print non-unique email addresses
echo "Non-unique email addresses:\n";
foreach ($nonUniqueEmails as $email) {
    echo "$email\n";
}
?>
