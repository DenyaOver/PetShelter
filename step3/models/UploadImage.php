<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
class UploadImage extends Model
{

    /**
     * @var UploadedFile
     */
    public $image;

    public function rules()
    {
        return [
            [['image'], 'file',
                'extensions' => ['jpg', 'jpeg', 'png']
            ],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs("uploads/{$this->image->baseName}.{$this->image->extension}");
        } else {
            return false;
        }
    }

    private function randomFileName($extension = false)
    {
        $extension = $extension ? '.' . $extension : '';
        do {
            $name = md5(microtime() . rand(0, 1000));
            $file = $name . $extension;
        } while (file_exists($file));
        return $file;
    }

}