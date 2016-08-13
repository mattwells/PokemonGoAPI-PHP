<?php

use NicklasW\PkmGoApi\Api\Pokemon\Support\CombatPointsCalculator as Calculator;

class CombatPointsCalculatorTest extends TestCase
{
    /** @test */
    function level()
    {
        $this->assertEquals( 1, Calculator::getLevel(0.094000));
        $this->assertEquals( 2, Calculator::getLevel(0.166398));
        $this->assertEquals( 3, Calculator::getLevel(0.215732));
        $this->assertEquals( 4, Calculator::getLevel(0.255720));
        $this->assertEquals( 5, Calculator::getLevel(0.290250));
        $this->assertEquals( 6, Calculator::getLevel(0.321088));
        $this->assertEquals( 7, Calculator::getLevel(0.349213));
        $this->assertEquals( 8, Calculator::getLevel(0.375236));
        $this->assertEquals( 9, Calculator::getLevel(0.399567));
        $this->assertEquals(10, Calculator::getLevel(0.422500));
        $this->assertEquals(11, Calculator::getLevel(0.443108));
        $this->assertEquals(12, Calculator::getLevel(0.462798));
        $this->assertEquals(13, Calculator::getLevel(0.481685));
        $this->assertEquals(14, Calculator::getLevel(0.499858));
        $this->assertEquals(15, Calculator::getLevel(0.517394));
        $this->assertEquals(16, Calculator::getLevel(0.534354));
        $this->assertEquals(17, Calculator::getLevel(0.550793));
        $this->assertEquals(18, Calculator::getLevel(0.566755));
        $this->assertEquals(19, Calculator::getLevel(0.582279));
        $this->assertEquals(20, Calculator::getLevel(0.597400));
        $this->assertEquals(21, Calculator::getLevel(0.612157));
        $this->assertEquals(22, Calculator::getLevel(0.626567));
        $this->assertEquals(23, Calculator::getLevel(0.640653));
        $this->assertEquals(24, Calculator::getLevel(0.654436));
        $this->assertEquals(25, Calculator::getLevel(0.667934));
        $this->assertEquals(26, Calculator::getLevel(0.681165));
        $this->assertEquals(27, Calculator::getLevel(0.694144));
        $this->assertEquals(28, Calculator::getLevel(0.706884));
        $this->assertEquals(29, Calculator::getLevel(0.719399));
        $this->assertEquals(30, Calculator::getLevel(0.731700));
        $this->assertEquals(31, Calculator::getLevel(0.737769));
        $this->assertEquals(32, Calculator::getLevel(0.743789));
        $this->assertEquals(33, Calculator::getLevel(0.749761));
        $this->assertEquals(34, Calculator::getLevel(0.755686));
        $this->assertEquals(35, Calculator::getLevel(0.761564));
        $this->assertEquals(36, Calculator::getLevel(0.767397));
        $this->assertEquals(37, Calculator::getLevel(0.773187));
        $this->assertEquals(38, Calculator::getLevel(0.778933));
        $this->assertEquals(39, Calculator::getLevel(0.784637));
        $this->assertEquals(40, Calculator::getLevel(0.790300));
    }

    /** @test */
    function startdust_cost_for_powerup()
    {
        $this->assertEquals(  200, Calculator::getStardustCostsForPowerup(0.094000,  1));
        $this->assertEquals(  200, Calculator::getStardustCostsForPowerup(0.166398,  2));
        $this->assertEquals(  200, Calculator::getStardustCostsForPowerup(0.215732,  3));
        $this->assertEquals(  400, Calculator::getStardustCostsForPowerup(0.255720,  4));
        $this->assertEquals(  600, Calculator::getStardustCostsForPowerup(0.290250,  5));
        $this->assertEquals(  600, Calculator::getStardustCostsForPowerup(0.321088,  6));
        $this->assertEquals(  600, Calculator::getStardustCostsForPowerup(0.349213,  7));
        $this->assertEquals(  800, Calculator::getStardustCostsForPowerup(0.375236,  8));
        $this->assertEquals( 1000, Calculator::getStardustCostsForPowerup(0.399567,  9));
        $this->assertEquals( 1000, Calculator::getStardustCostsForPowerup(0.422500, 10));
        $this->assertEquals( 1000, Calculator::getStardustCostsForPowerup(0.443108, 11));
        $this->assertEquals( 1300, Calculator::getStardustCostsForPowerup(0.462798, 12));
        $this->assertEquals( 1300, Calculator::getStardustCostsForPowerup(0.481685, 13));
        $this->assertEquals( 1600, Calculator::getStardustCostsForPowerup(0.499858, 14));
        $this->assertEquals( 1600, Calculator::getStardustCostsForPowerup(0.517394, 15));
        $this->assertEquals( 1900, Calculator::getStardustCostsForPowerup(0.534354, 16));
        $this->assertEquals( 1900, Calculator::getStardustCostsForPowerup(0.550793, 17));
        $this->assertEquals( 2200, Calculator::getStardustCostsForPowerup(0.566755, 18));
        $this->assertEquals( 2200, Calculator::getStardustCostsForPowerup(0.582279, 19));
        $this->assertEquals( 2500, Calculator::getStardustCostsForPowerup(0.597400, 20));
        $this->assertEquals( 2500, Calculator::getStardustCostsForPowerup(0.612157, 21));
        $this->assertEquals( 3000, Calculator::getStardustCostsForPowerup(0.626567, 22));
        $this->assertEquals( 3000, Calculator::getStardustCostsForPowerup(0.640653, 23));
        $this->assertEquals( 3500, Calculator::getStardustCostsForPowerup(0.654436, 24));
        $this->assertEquals( 3500, Calculator::getStardustCostsForPowerup(0.667934, 25));
        $this->assertEquals( 4000, Calculator::getStardustCostsForPowerup(0.681165, 26));
        $this->assertEquals( 4000, Calculator::getStardustCostsForPowerup(0.694144, 27));
        $this->assertEquals( 4500, Calculator::getStardustCostsForPowerup(0.706884, 28));
        $this->assertEquals( 4500, Calculator::getStardustCostsForPowerup(0.719399, 29));
        $this->assertEquals( 5000, Calculator::getStardustCostsForPowerup(0.731700, 30));
        $this->assertEquals( 5000, Calculator::getStardustCostsForPowerup(0.737769, 31));
        $this->assertEquals( 6000, Calculator::getStardustCostsForPowerup(0.743789, 32));
        $this->assertEquals( 6000, Calculator::getStardustCostsForPowerup(0.749761, 33));
        $this->assertEquals( 7000, Calculator::getStardustCostsForPowerup(0.755686, 34));
        $this->assertEquals( 7000, Calculator::getStardustCostsForPowerup(0.761564, 35));
        $this->assertEquals( 8000, Calculator::getStardustCostsForPowerup(0.767397, 36));
        $this->assertEquals( 8000, Calculator::getStardustCostsForPowerup(0.773187, 37));
        $this->assertEquals( 9000, Calculator::getStardustCostsForPowerup(0.778933, 38));
        $this->assertEquals( 9000, Calculator::getStardustCostsForPowerup(0.784637, 39));
        $this->assertEquals(10000, Calculator::getStardustCostsForPowerup(0.790300, 40));
    }
}
