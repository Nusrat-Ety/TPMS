<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Spot;
class AddTourPlan extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(){

        //who->relation name->to whom
            // 1 to  1 dependent =belongsTo
            // 1 to 1 not dependent = hasOne
            return $this->belongsTo(User::class);
        }
        public function spot(){
            return $this->belongsTo(Spot::class);
        }
}
