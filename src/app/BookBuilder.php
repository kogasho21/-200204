<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookBuilder extends Model
{
    /**
     * 本情報を取得します。
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    /**
     * 建築者情報を取得します。
     */
    public function builder()
    {
        return $this->belongsTo('App\Builder');
    }
}
