<?php
echo "Show difference between numeric string and text string.<br>";
$numeric_string = 12345;
$text_string = "12345";
echo "Numeric String: " . $numeric_string . "<br>";
echo "Numeric String Datatype: ". gettype($numeric_string) . "<br>";
echo "Text String: " . $text_string . "<br>";
echo "Text String Datatype: " . gettype($text_string) . "<br>";
?>