<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model
{
    /**
     * To multiple insertion at the same time i.e. Mass Assignment
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'excerpt',
        'user_id'
    ];

    // Makes appear time too.
    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    // In scope scopePublished($query) function
    // In controller published() function
    /**
     * @param $query
     */
    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * @param $query
     */
    public function scopeUnpublished($query) {
        $query->where('published_at', '>', Carbon::now());
    }

    /**
     * An article is owned by a user i.e. foreign key
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
