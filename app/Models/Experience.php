<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'client',
        'project_name',
        'location',
        'scope_of_work',
        'description',
        'project_duration',
        'image',
    ];
}
