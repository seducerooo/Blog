<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_image',
        'title',
        'content',
    ];
    protected $table = 'posts';
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
