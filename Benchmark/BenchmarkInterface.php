<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author   Malik Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/malikumerfarooq01/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 * 
 * @license MIT
 *
 */


namespace Softhub99\Zest_Framework\Benchmark;

interface BenchmarkInterface
{
    public static function start();

    public static function end();

    public static function elapsedTime(int $round);
}
