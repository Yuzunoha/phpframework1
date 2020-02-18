<?php

namespace controllers;

class Api
{
    public function index(): array
    {
        return array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    }

    public function test(): array
    {
        return array('msg' => "test");
    }
}
