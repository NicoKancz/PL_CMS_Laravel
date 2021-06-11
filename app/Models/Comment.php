<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'commentId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'commentText',
        'contentId',
        'userId',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class, 'contentId', 'contentId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
