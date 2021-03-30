<?php

namespace shahrooz7216\Searchy\Interfaces;

interface SearchDriverInterface
{
    public function query($searchString);

    public function select(/* $columns */);

    public function get();
}
