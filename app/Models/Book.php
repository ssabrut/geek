<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function author() {
        return $this->belongsTo(Authors::class);
    }

    public function genres() {
        return $this->hasMany(Genre::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }
}
