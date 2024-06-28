<?php
function stringToDecimalRepresentation($string, $delimiter = ',') {
    // Handle special delimiter cases
    if ($delimiter === '\n') {
        $delimiter = PHP_EOL;
    } elseif ($delimiter === '\t') {
        $delimiter = "\t";
    }

    // Check if the string is empty
    if ($string === '') {
        return false;
    }

    // Convert each character to its decimal representation
    $result = [];
    for ($i = 0; $i < strlen($string); $i++) {
        $result[] = ord($string[$i]);
    }

    // Join the decimal values with the specified delimiter
    return implode($delimiter, $result);
}
?>