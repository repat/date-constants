<?php
/**
 * Tests the definition of time constants.
 *
 * @package SteveGrunwell\TimeConstants
 */

use PHPUnit\Framework\TestCase;

class ConstantsTest extends TestCase
{
    /**
     * Ensure that each constant is defined and numeric.
     *
     * @dataProvider constantsProvider()
     */
    public function testConstantsAreDefined($constant)
    {
        $this->assertTrue(defined($constant), 'Expected the constant to be defined.');
        $this->assertInternalType('integer', constant($constant), 'Expected an integer value.');
    }

    /**
     * Provides a list of all constants defined by this package.
     */
    public function constantsProvider()
    {
        return [
            'January'       => ['JANUARY'],
            'February'       => ['FEBRUARY'],
            'March'       => ['MARCH'],
            'April'       => ['APRIL'],
            'May'       => ['MAY'],
            'June'       => ['JUNE'],
            'July'       => ['JULY'],
            'August'       => ['AUGUST'],
            'September'       => ['SEPTEMBER'],
            'October'       => ['OCTOBER'],
            'November'       => ['NOVEMBER'],
            'December'       => ['DECEMBER'],
        ];
    }
}
