<?php

namespace shahrooz7216\Searchy\SearchDrivers;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \shahrooz7216\Searchy\Matchers\ExactMatcher::class                        => 100,
        \shahrooz7216\Searchy\Matchers\StartOfStringMatcher::class                => 50,
        \shahrooz7216\Searchy\Matchers\AcronymUnicodeMatcher::class               => 42,
        \shahrooz7216\Searchy\Matchers\ConsecutiveCharactersUnicodeMatcher::class => 40,
        \shahrooz7216\Searchy\Matchers\StartOfWordsMatcher::class                 => 35,
        \shahrooz7216\Searchy\Matchers\StudlyCaseUnicodeMatcher::class            => 32,
        \shahrooz7216\Searchy\Matchers\InStringMatcher::class                     => 30,
        \shahrooz7216\Searchy\Matchers\TimesInStringMatcher::class                => 8,
  ];
}
