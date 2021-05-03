<?php

class homeController
{

    public function __construct()
    {
    }

    function index()
    {
        $data = [
            'title' => 'Wiliams',
            'bg' => 'dark'
        ];

        View::render('index', $data);
    }

    function test()
    {
        View::render('test');
    }
}