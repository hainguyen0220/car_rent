<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $quarded =[];

    public function gara() {
        return $this->belongsTo(Gara::class,'gara_id','id');
    }
}
