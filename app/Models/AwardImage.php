<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AwardImage extends Model
{
    protected $fillable = ['award_id', 'image'];

    public function award()
    {
        return $this->belongsTo(Award::class);
    }
}
