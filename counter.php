<?php
// Path to the counter file
$file = 'counter.txt';

// Check if the file exists
if (!file_exists($file)) {
    // Create the file and initialize with 0 if it doesn't exist
    file_put_contents($file, '0');
}

// Read the current count
$currentCount = file_get_contents($file);

// Increment the count
$currentCount++;

// Write the new count back to the file
file_put_contents($file, $currentCount);

// Output the count (this will be captured by your JavaScript)
echo $currentCount;
?>
