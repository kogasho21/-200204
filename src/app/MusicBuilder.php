<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicBuilder extends Model
{
    /**
     * 音楽情報を取得します。
     */
    public function music()
    {
        return $this->belongsTo('App\Music');
    }

    /**
     * 建築者情報を取得します。
     */
    public function builder()
    {
        return $this->belongsTo('App\Builder');
    }
}
