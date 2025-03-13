<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function search(): string
    {
        return view('search');
    }
}