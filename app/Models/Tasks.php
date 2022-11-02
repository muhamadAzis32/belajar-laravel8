<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['user', 'task']; //-> Mendefinisan apa saja yang akan di isi

    //protected $guarded = []; //-> Memilih apa aja yang tidak boleh isi
}
