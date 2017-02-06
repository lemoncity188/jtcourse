<?php
namespace app\m;
use yii\base\Model;

class  Uploader extends Model
{
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg'],
        ];
    }

    public function upload()
    {
        $userid="0";//后面再做，用户的ID，默认0，代表超级管理员
        $imgName=date('Ymdhis').$userid;
        if ($this->validate()) {
            $this->imageFile->saveAs('images/videos/' . $imgName . '.' . $this->imageFile->extension);
            return $imgName;
        } else {
            return false;
        }
    }
}