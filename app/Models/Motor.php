<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Kyslik\ColumnSortable\Sortable;

class Motor extends Model
{
    use HasFactory;
    // Sortable;

    public $sortable = [
        'price',
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
    'model',
    'color',
    'image',
    'price',
    'weight'
    ];
}
