<?php
/**
 * Created by PhpStorm.
 * User: lilia
 * Date: 11/30/19
 * Time: 2:09 PM
 */

namespace app\models;



use yii\base\Model;

class UploadForm extends Model {

public $file;

    public function attributeLabels()// спомощью этого метода меняем наименованией полей используем место labels в forme
    {
        return [
'file'=>'Выберите файл',

        ];
    }
    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xml'],
        ];
    }
}


