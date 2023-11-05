<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$message = stream_get_line(STDIN, 1000 + 1, "\n");

if(strlen($message) <= 67 && strlen($message) > 999) {
    return 0;
}

function registerCheck($text) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $letterFr = array_fill(0, 26, 0);
    
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (in_array(strtolower($char), str_split($alphabet))) {
            $position = strpos($alphabet, strtolower($char));
            $letterFr[$position]++;
        }
    }

    $mostFrequentLetterPosition = array_search(max($letterFr), $letterFr);
    $shift = ($mostFrequentLetterPosition - (ord('e') - ord('a')) + 26) % 26;
    $decryptedText = decrypt($text, $shift);
    return $decryptedText;
}

function decrypt($text, $shift) {
    $decryptedText = '';
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        $isUppercase = false;

        if (ctype_upper($char)) {
            $char = strtolower($char);
            $isUppercase = true;
        }

        if (in_array($char, str_split($alphabet))) {
            $position = strpos($alphabet, $char);
            $newPosition = ($position - $shift + 26) % 26;
            $decryptedChar = $alphabet[$newPosition];

            if ($isUppercase) {
                $decryptedChar = strtoupper($decryptedChar);
            }

            $decryptedText .= $decryptedChar;
        } else {
            $decryptedText .= $char;
        }
    }

    echo($decryptedText);
}

$decryptedText = registerCheck($message);


?>