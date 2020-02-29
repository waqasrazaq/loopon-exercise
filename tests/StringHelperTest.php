<?php
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    public function testWithGivenInputs() {
        $stringHelper = new StringHelper();
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "Peter");
        $this->assertEquals($output, "1, 20, 75");
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "peter");
        $this->assertEquals($output, "1, 20, 75");
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "pick");
        $this->assertEquals($output, "30, 58");
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "pi");
        $this->assertEquals($output, "30, 37, 43, 51, 58");
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "z");
        $this->assertEquals($output, "");
        $output = $stringHelper->findSubTextOccurrences("Peter told me that peter the pickle piper piped a pitted pickle before he petered out. Phew!", "Peterz");
        $this->assertEquals($output, "");
    }

    public function testWithSpecialCharacters() {
        $stringHelper = new StringHelper();
        $output = $stringHelper->findSubTextOccurrences("Email as lorem@xyz.com", "@xyz");
        $this->assertEquals($output, "15");
    }

    public function testWithBoundaryCondition() {
        $stringHelper = new StringHelper();
        $output = $stringHelper->findSubTextOccurrences("Lorem I", "Ipsum");
        $this->assertEquals($output, "");
    }

    public function testCaseInsensitivity() {
        $stringHelper = new StringHelper();
        $output = $stringHelper->findSubTextOccurrences("LOREM IPSUM IS SIMPLY DUMMY TEST. LOREM IPSUM HAS BEEN INDUSTRY STANDARD", "lorem");
        $this->assertEquals($output, "1, 35");
    }
}
