<?php

namespace App\Models;

use App\Models\Join;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function join()
    {
        return $this->belongsTo(Join::class,'join_id','id');
        
    }
   
}
