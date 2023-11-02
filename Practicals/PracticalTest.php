<?php

require_once 'Practical.php'; // Include the Practical class file

use PHPUnit\Framework\TestCase;

class PracticalTest extends TestCase {
    public function testAdd() {
        $result = Practical::add(5, 3);
        $this->assertEquals(8, $result);
    }
}

?>
