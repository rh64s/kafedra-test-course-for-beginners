<p>перевести строку в верхний регистр</p>
<?php
//echo strtoupper(fgets(STDIN));
$any_string = "string";
echo "string", "<br>";
echo strtoupper($any_string);
?>
<p>развернуть строку (развернуть порядок слов)</p>
<?php
$any_string = "this is my string";
$words = [];
$current_word = '';
for ($i = 0;  $i < mb_strlen($any_string); $i++) {
    if ($any_string[$i] != ' ') {
        $current_word = $current_word . $any_string[$i];
    } else {
        $words[] = $current_word;
        $current_word = '';
    }
}
if ($current_word != '') {
    $words[] = $current_word;
}
$current_word = '';
for ($i = count($words)-1; $i >= 0; $i--) {
    $current_word .= $words[$i] . " ";
}
echo $current_word;
?>
