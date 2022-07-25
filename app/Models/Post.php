<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    protected $guarded = ['id'];
    protected $with = ['user','category'];

    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //             ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        //VERSI CALLBACK
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        //VERSI AEROFUNCTION
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('user', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    //Mengubah route binding selain ID
    public function getRouteKeyName(){
        return 'slug';
    }

    //Otomatis membuat slug dari title
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
