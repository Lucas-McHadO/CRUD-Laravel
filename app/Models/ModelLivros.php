<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelLivros extends Model
{
    use HasFactory;
    protected $table = 'livros';
    protected $fillable=['titulo','autor','preco'];
    public $timestamps = false;
   
}
