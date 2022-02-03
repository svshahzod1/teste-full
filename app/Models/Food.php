<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    //protected $table = 'food';
    
    protected $fillable = ['narxi','nomi','retsept','categoriy_id','image'];
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoriy_id', 'id');
    }

    
    public function scopeFilter($query, $request)
    {
        $category_id = $request->category_id;
        $search = $request->name;

        if(!empty($category_id)){
            $query->where('categoriy_id', $category_id);
        }

        if(!empty($search)){
            $query->where('nomi', 'like', "%$search%");
        }
    }

}
