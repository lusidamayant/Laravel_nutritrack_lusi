<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $primaryKey = 'id_food';
    public $incrementing = true;
    protected $fillable = ['nama_makanan', 'calories', 'protein','carbs','fat','fiber','gambar'];
    public $timestamps = false;

}
