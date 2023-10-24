<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
//use Illuminate\Support\Facades\DB;
use App\Utils\GeneralUtils;
use App\Helpers\CaseHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\TestCase;

use Mockery;

class GeneralUtilsTest extends TestCase
{

    use RefreshDatabase;

    //use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_getLatestPolicyName()
{
    $this->assertTrue(true);
}
public function test_countDecreaseCoverCases()
{
    
}


public function test_decreaseOverCases()
{
    // Arrange
    // Assuming there are two decrease cover cases in the 'cases' table
    DB::table('cases')->insert([
        ['cover_type' => 'decrease'],
        ['cover_type' => 'decrease']
    ]);

    // Act
    $count = CaseHelper::countDecreaseCoverCases();

    // Assert
    $this->assertEquals(2, $count);
}

}
