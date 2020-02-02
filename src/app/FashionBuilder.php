<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FashionBuilder extends Model
{
    /**
     * ファッション情報を取得します。
     */
    public function fashion()
    {
        return $this->belongsTo('App\Fashion');
    }

    /**
     * 建築者情報を取得します。
     */
    public function builder()
    {
        return $this->belongsTo('App\Builder');
    }
}
