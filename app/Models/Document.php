<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;

class Document extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'document';

    // Fillable fields
    protected $fillable = ['name', 'file_path', 'user_id'];

    // Define the relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
