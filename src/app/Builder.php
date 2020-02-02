<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{

    /**
     * 建築者が設定した音楽情報を取得します。
     */
    public function musicBuilders()
    {
        return $this->hasMany('App\MusicBuilder');
    }

    /**
     * 建築者が設定した本情報を取得します。
     */
    public function bookBuilders()
    {
        return $this->hasMany('App\BookBuilder');
    }

    /**
     * 建築者が設定したファッション情報を取得します。
     */
    public function fashionBuilders()
    {
        return $this->hasMany('App\FashionBuilder');
    }

    /**
     * 建築者が設定した映画情報を取得します。
     */
    public function movieBuilders()
    {
        return $this->hasMany('App\MovieBuilder');
    }
}
