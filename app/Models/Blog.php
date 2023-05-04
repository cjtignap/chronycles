<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // protected $fillable = ['title','subtitle','description','username','blog-image','header-image','created-at','updated-at','id'];
    
    public function scopeFilter($query, array $filters){
        if($filters['written-by'] ?? false){
            $query->where('username','like','%'.request('written-by').'%');
        }
        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('subtitle','like','%'.request('search').'%')
            ->orWhere('username','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
        }
    }
}
