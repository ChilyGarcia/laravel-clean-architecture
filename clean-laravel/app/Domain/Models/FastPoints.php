<?php

namespace App\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastPoints extends Model
{
    use HasFactory;

    protected $table = 'fast_points';

    protected $fillable = ['user_id', 'fast_point'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
