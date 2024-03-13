<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrameworkData extends Model
{
    use HasFactory;

    protected $table = 'module_description';
    protected $primaryKey = 'moduleId';
    public $timestamps = false;

    protected $fillable = ['moduleId', 'languageId', 'title', 'subtitle', 'description', 'buttonTitle', 'buttonLink', 'createdAt', 'updatedAt', 'deletedAt'];
}
