<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieBuilder extends Model
{
    /**
     * 映画情報を取得します。
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    /**
     * 建築者情報を取得します。
     */
    public function builder()
    {
        return $this->belongsTo('App\Builder');
    }
}
