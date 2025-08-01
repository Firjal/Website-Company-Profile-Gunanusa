<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = ['name'];

    public function images()
    {
        return $this->hasMany(AwardImage::class);
    }
}
