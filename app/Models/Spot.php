<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $table="_spots";
    protected $guarded=[];

    public function location(){
        return $this->belongsTo(location::class);
    }
}
