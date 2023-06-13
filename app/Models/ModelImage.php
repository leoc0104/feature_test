<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelImage extends Model
{
    protected $table = 'images';

<<<<<<< Updated upstream
    protected $fillable = ['username', 'action', 'width', 'height'];
=======
    protected $fillable = ['username', 'action', 'width', 'height', 'image', 'extension'];
>>>>>>> Stashed changes
}
