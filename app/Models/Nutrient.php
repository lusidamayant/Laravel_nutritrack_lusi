<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrient extends Model
{
    use HasFactory;
    protected $table = 'nutrient__intakes';
    protected $primaryKey = 'id_nutrient';
    public $incrementing = true;
    protected $fillable = ['nama_pengguna','nama_makanan', 'calories', 'protein','carbs','fat','fiber'];
    public $timestamps = false;
}
