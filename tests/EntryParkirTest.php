<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/EntryParkir.php";

use PHPUnit\Framework\TestCase;

final class EntryParkirTest extends TestCase
{
    public function testSuccessInsertRuangParkir()
    {
        $parkir = new EntryParkir();
        $insert = $parkir->insertData("113", "GGGGGGX","Kanan","13");

        $this->assertTrue($insert);
    }

}
