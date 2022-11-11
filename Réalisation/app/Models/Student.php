<?php

namespace App\Models;
use App\Models\Briefs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    protected $fillable=[
     'promotion_name'
    ];

    public $timestamps=false;

    public function briefs(){
        return $this->belongsToMany(Briefs::class);
    }
}
