<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'mymodel_id';
    protected $table = 'mymodels';
    protected $fillable = ['name',"body_style","option_id","brand_id"];
    
}
