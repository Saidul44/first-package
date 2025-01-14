<?php

namespace Saidul44\FirstPackage\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstPackageController extends Controller
{
    public function index()
    {
        echo "Yes!!! It's my first Package";
    }
}