<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'isOpen' => true,
    ];

    /**
     * Get the project that owns the bug.
     */
    public function project(): BelongsTo
    {
        return $this->BelongsTo(Bug::class);
    }
}
