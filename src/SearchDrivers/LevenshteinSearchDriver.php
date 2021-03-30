<?php

namespace shahrooz7216\Searchy\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \shahrooz7216\Searchy\Matchers\LevenshteinMatcher::class           => 100,
    ];
}
