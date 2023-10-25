<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "posts";

    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'user_id',
        'category_id',
        'views'
    ];

    // If you want to make all fields mass assignable then leave/add this array empty.
    // protected $guarded = [
    //     'title'
    // ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        // return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
        return $this->belongsToMany(Tag::class);
    }
}
