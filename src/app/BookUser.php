<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookUser extends Model
{
    /**
     * 本情報を取得します。
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
