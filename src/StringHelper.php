<?php
declare(strict_types=1);

/**
 * Class StringHelper
 */
class StringHelper
{
    /**
     * @param $textToSearch
     * @param $subtext
     * @return string
     */
    public function findSubTextOccurrences($textToSearch, $subtext)
    {
        $textToSearch = strtolower($textToSearch);
        $subtext = strtolower($subtext);
        $lengthTextToSearch = strlen($textToSearch);
        $lengthSubtext = strlen($subtext);

        $index=0;
        $foundLocations = [];
        while ($index<$lengthTextToSearch) {
            if ($textToSearch[$index]==$subtext[0]) {
                $found=1; //After matching the first letter, A flag which keeps found=1 until it's not true
                for ($j=1; $j<$lengthSubtext; $j++) { // Iterate the subtext to check if match completely
                    if (($index+$j)>=$lengthTextToSearch ||  ($textToSearch[$index+$j]!=$subtext[$j])) {
                        $found=0;
                        break;
                    }
                }
                if ($found==1)
                    array_push($foundLocations, $index+1); //Adding +1 because the found locations in output is expected to start the index with 1 not zero based.
            }
            $index++;
        }
        return implode(", ", $foundLocations);
    }
}
