<?php
require "../vendor/autoload.php";

$stringHelper = new StringHelper();

// Expected 1, 20, 75
echo "1=>  " . $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "Peter") . "<br/>";

// Expected 1, 20, 75
echo "2=>  " . $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "peter") . "<br/>";

// Expected 30, 58
echo "3=>  " . $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "pick") . "<br/>";

// Expected 30, 37, 43, 51, 58
echo "4=>  " . $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "pi") . "<br/>";

// Expected ""
echo "5=>  " . $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "z") . "<br/>";
