<?php

use NicklasW\PkmGoApi\Api\Pokemon\Support\CombatPointsCalculator as Calculator;

class CombatPointsCalculatorTest extends TestCase
{
    /** @test */
    function level()
    {
        //
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
