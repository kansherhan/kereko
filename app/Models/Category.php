<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
