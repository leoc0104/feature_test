<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelImage;

class ImageController extends Controller
{
    private $objImage;

    public function __construct(){
        $this->objImage = new ModelImage();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = $this->objImage->paginate(3);
        return view('index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $images = $this->objImage->all();
        return view('action', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //if ($request->file('image')->isValid()){
            $nameFile = $request->name.'.'.$request->image->extension();
            $path = $request->file('image')->store('batata'.'_'.$nameFile);
        //}

        $cre = $this->objImage->create([
            'username' => $request->username,
            'action' => $request->action,
            'height' => $request->height,
            'width' => $request->width,
            'image' => $request->image,
            'extension' => $request->file('image')->extension(),
            'path' => $path,
            'original_size' => $request->file('image')->extension()
        ]);

        if($cre){
            return redirect('index');
        }
    }
}
