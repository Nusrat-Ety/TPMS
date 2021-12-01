<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTourPlan extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function travelar(){

        //who->relation name->to whom
            // 1 to  1 dependent =belongsTo
            // 1 to 1 not dependent = hasOne
            return $this->belongsTo(Travelar::class);
        }
}
