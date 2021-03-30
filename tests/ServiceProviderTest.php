<?php

namespace shahrooz7216\Tests\Searchy;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use shahrooz7216\Searchy\SearchBuilder;

/**
 * This is the service provider test.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSearchBuilderIsInjectable()
    {
        $this->assertIsInjectable(SearchBuilder::class);
    }
}
