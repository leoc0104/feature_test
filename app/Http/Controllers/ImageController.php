<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelImage;

class ImageController extends Controller
{
    private $objImage;

    public function __construct()
    {
        $this->objImage = new ModelImage();
    }

    public function index()
    {
        $images = $this->objImage->paginate(5);
        return view('index', compact('images'));
    }
}
