<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;
    public $timestamps = false;
    protected $fillable = ['fullName', 'commentDate', 'email', 'phone', 'subjet', 'comment', 'action'];
}
