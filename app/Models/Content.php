<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contents';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'contentId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contentName',
        'contentTitle',
        'contentDesc',
        'contentStatus',
        'contentImage',
        'categoryId',
        'userId',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId', 'categoryId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
