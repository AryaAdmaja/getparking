<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/ExitParkir.php";

use PHPUnit\Framework\TestCase;

final class ExitParkirTest extends TestCase
{
    public function testSuccessExitCar(): void
    {
        $ExitParkir = new ExitParkir();
        $test = $ExitParkir->insertData("113", "GGGGGGX","Kanan","13");

        $this->assertTrue($test);
    }
}