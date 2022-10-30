<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    // protected $fillable = []; -> Mendefinisan apa saja yang akan di isi

    protected $guarded = []; //-> Memilih apa aja yang tidak boleh isi
}
