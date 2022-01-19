<?php

namespace App\Models;
use App\Models\AddTourPlan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tourplan(){
        return $this->belongsTo(AddTourplan::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

   
}
