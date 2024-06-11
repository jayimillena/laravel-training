<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['id', 'title','description','long_desscription','completed'];

    protected $table = 'tasks';
        
    use HasFactory;
}
