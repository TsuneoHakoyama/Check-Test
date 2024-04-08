<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'detail',
    ];

    public static $rules = array(
        'category_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'tell' => 'required',
        'address' => 'required',
        'detail' => 'required',
    );

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
