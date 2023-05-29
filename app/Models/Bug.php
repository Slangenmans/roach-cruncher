<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'isOpen'
    ];

    protected $attributes = [
        /*
        TODO create default attributes:
           +dateCreated (date)
           +isOpen (bool)
        */
        'isOpen' => true,
    ];
}
