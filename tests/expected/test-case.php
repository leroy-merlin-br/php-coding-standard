<?php
namespace Fancy;

use PHPUnit\Framework\TestCase as BaseTestCase;
use PHPUnit\Framework\TestHelpers;

/**
 * @requires PHP 7.2
 */
final class TestCase extends BaseTestCase
{
    use TestHelpers;

    public static function doStuff(): void
    {
    }

    public function createDependencies()
    {
    }

    public function methodShouldDoStuff()
    {
    }
}
