<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'content', 'created_at'];

    public $timestamps = true;
}
