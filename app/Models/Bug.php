<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $attributes = [
         /*
         TODO create default attributes:
            +dateCreated (date)
            +isOpen (bool)
         */
        'options' => '[]',
        'isOpen' => true,
    ];
}
