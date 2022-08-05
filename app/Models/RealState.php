<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    use HasFactory;
    protected $table="real_states";
    protected $guarded=[] ;

    public function images()
    {
        return $this->hasMany(RealEstateImage::class,'real_estate_id','id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class,'real_estate_id','id');
    }
}
