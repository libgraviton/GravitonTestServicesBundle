<?php
/**
 * simple class that return one of three random strings
 */

namespace Graviton\TestServicesBundle\Service;

/**
 * @author  List of contributors <https://github.com/libgraviton/graviton/graphs/contributors>
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    http://swisscom.ch
 */
class Random
{

    private static $randomStrings = [
        'randomOne',
        'randomTwo',
        'randomThree'
    ];

    /**
     * @return string[]
     */
    public static function getRandomStrings(): array
    {
        return self::$randomStrings;
    }

    public function getRandomString()
    {
        shuffle(self::$randomStrings);
        return self::$randomStrings[0];
    }
}
