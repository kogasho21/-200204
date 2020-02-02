<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieUser extends Model
{

    /**
     * 映画情報を取得します。
     */
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
