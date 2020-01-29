<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akiya extends Model{

	protected $fillable = [
        'akiya_id',
        'location',
        'landarea',
        'drivewayarea',
        'buildingarea',
        'buildingstructure',
    ];

    /**
     * akiya_idと同一のディレクトリにある画像パスを全て取得する
     *
     * @return array
     */
    public function getImagePathsAttribute() {
        $dir = public_path("/img/$this->akiya_id");
        $pathArray = [];

        if (is_dir($dir)) {
            $imageNames = preg_grep('~\.(jpeg|jpg|png)$~', scandir($dir));

            foreach($imageNames as $imageName){
                $pathArray[] = "/img/$this->akiya_id/$imageName";
            }
        }

        return $pathArray;
    }
}
