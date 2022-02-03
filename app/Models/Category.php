<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //protected $table = 'categories'

    protected $fillable = ['name', 'description'];

    public function niceName()
    {
        return strtoupper($this->name);
    }

    public function food()
    {
        return $this->hasMany(Food::class, 'categoriy_id', 'id');
    }

}
