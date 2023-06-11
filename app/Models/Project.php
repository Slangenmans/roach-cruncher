<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
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
        // TODO: Add foreign key bugs
    ];

    /**
     * Get the bugs for the project.
     */
    // public function bugs(): HasMany
    // {
    //     return $this->hasMany(Bug::class);
    // }

}
