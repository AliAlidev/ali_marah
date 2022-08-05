<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealState extends Model
{
    use HasFactory;
    protected $table="real_states";
    protected $fillable = [ 'lat' ,'long' , 'qrcode' ,'user_id' ,'state_id' , 'property_id' ,'category_id' ,'active'] ;
}
