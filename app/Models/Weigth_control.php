<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File_Animale;

class Weigth_control extends Model
{
    use HasFactory;
    protected $table = "weigth_control";

    public function file_animale(){
        return $this->hasOne(File_Animale::class);
    }
}
