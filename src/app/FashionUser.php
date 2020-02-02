<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FashionUser extends Model
{

    /**
     * ファッション情報を取得します。
     */
    public function fashion()
    {
        return $this->belongsTo('App\Fashion');
    }
}
