<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/CreateRuangParkir.php";

use PHPUnit\Framework\TestCase;

final class CreateRuangParkirTest extends TestCase
{
    public function testPageCanLoadValidData(): void
    {
        $parkir = new CreateRuangParkir();
        $test = $parkir->ensureDataIsLoaded();

        $this->assertTrue(is_array($test));
    }

    public function testSuccessInsertRuangParkir()
    {
        $parkir = new CreateRuangParkir();
        $insert = $parkir->insertData("115", "Kiri");

        $this->assertTrue($insert);
    }

    public function testRuangParkirInputCannotBeEmpty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $parkir = new CreateRuangParkir();
        $parkir->insertData("115", "Kiri");
    }

}
