<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicUser extends Model
{

    /**
     * 音楽情報を取得します。
     */
    public function music()
    {
        return $this->belongsTo('App\Music');
    }
}
