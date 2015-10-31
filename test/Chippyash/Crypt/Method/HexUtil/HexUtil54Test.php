<?php
/**
 * Crypt
 *
 * @author Ashley Kitson
 * @copyright Ashley Kitson, 2015, UK
 * @license GPL V3+ See LICENSE.md
 */
namespace Chippyash\Test\Crypt\Method\HexUtil;

use Chippyash\Crypt\Method\HexUtil\HexUtil54;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-10-02 at 15:06:41.
 *
 * @requires PHP 5.4
 */
class HexUtil54Test extends \PHPUnit_Framework_TestCase {

    public function testYouCanConvertAHexValueToABinaryValue() {
        $hex = 'F';
        $binary = HexUtil54::hex2bin($hex);
        $this->assertEquals('1111', base_convert(HexUtil54::bin2hex($binary), 16, 2));
    }

    public function testYouCanConvertABinaryValueToAHexValue() {
        $binary = "\xF";
        $hex = HexUtil54::bin2hex($binary);
        $this->assertEquals('0f', $hex);
    }
}
