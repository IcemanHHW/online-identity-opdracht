<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['author'];

    protected $casts = [
        'is_complete' => 'boolean',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
