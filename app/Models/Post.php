<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;
    use Filterable;
    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];
    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];
    protected $allowedFilters = [
        'title',
    ];
}
