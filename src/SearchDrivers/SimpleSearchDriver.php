<?php

namespace shahrooz7216\Searchy\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \shahrooz7216\Searchy\Matchers\ExactMatcher::class                 => 100,
        \shahrooz7216\Searchy\Matchers\StartOfStringMatcher::class         => 50,
        \shahrooz7216\Searchy\Matchers\InStringMatcher::class              => 30,
    ];
}
