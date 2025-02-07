<?php

namespace shahrooz7216\Searchy\Matchers;

use shahrooz7216\Searchy\Interfaces\MatcherInterface;

/**
 * @property mixed multiplier
 * @property mixed operator
 */
abstract class BaseMatcher implements MatcherInterface
{
    protected $multiplier;

    public function __construct($multiplier)
    {
        $this->multiplier = $multiplier;
    }

    /**
     * The default process for building the Query string.
     *
     * @param $column
     * @param $searchString
     *
     * @return mixed|string
     */
    public function buildQueryString($column, $searchString)
    {
        if (method_exists($this, 'formatSearchString'))
            $searchString = $this->formatSearchString($searchString);

        return "IF($column {$this->operator} '$searchString', {$this->multiplier}, 0)";
    }
}
