<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
   protected $fillable=[
    'promotion_name',
    "created_at",
    "updated_at"

   ];

   public $timestamps=true;

   public function Student(){
    return $this->hasMany(Student::class);
   }
}
