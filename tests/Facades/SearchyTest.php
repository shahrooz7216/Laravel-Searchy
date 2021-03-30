<?php

namespace shahrooz7216\Tests\Searchy\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use shahrooz7216\Searchy\Facades\Searchy;
use shahrooz7216\Searchy\SearchBuilder;
use shahrooz7216\Tests\Searchy\AbstractTestCase;

/**
 * This is the searchy facade test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class SearchyTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'searchy';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Searchy::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return SearchBuilder::class;
    }
}
