<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // Definisikan relasi dengan User jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
