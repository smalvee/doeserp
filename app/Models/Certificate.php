<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificate';
    protected $fillable = [
        'user_id',
        'Course_name',
        'DoS_number',
        'Certificate_number',
        'Date_of_issue',
        'Date_of_expire',
    ];
}
