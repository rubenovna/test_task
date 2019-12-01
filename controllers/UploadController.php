<?php
/**
 * Created by PhpStorm.
 * User: lilia
 * Date: 11/30/19
 * Time: 1:54 PM
 */

namespace app\controllers;


use app\models\Price;
use app\models\Product;
use app\models\Shipper;
use app\models\UploadForm;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;
use app\services\Parser;


class UploadController extends Controller
{

    private $parser;

    /**
     * UploadController constructor.
     */
    public function init()
    {
        $this->parser = new Parser();
    }


    public function actionUpload()
    {
        $this->view->title = "Парсинг файла";
        $model = new UploadForm();


        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');


            if ($model->file) {
                $model->file->saveAs('./uploads/' . $model->file->baseName . '.' . $model->file->extension);
                $path = (Yii::getAlias('@app').('/web/uploads/' . $model->file));
                $xml = $this->parser->parse($path);

                foreach ($xml as $course) {

                    $shipper = new Shipper();
                    $shipper->shipper = $course['VENDOR'];


                    $inbase = Shipper::findOne(['shipper' => $shipper->shipper]);
                    if ($inbase) {
                        $id = $inbase->id;


                    } else {
                        if ($shipper->save()) {
                            $id = Yii::$app->db->getLastInsertID();
                        } else {
                            echo "Ошибка при сохранении";
                        }
                    }


                    $product = new Product();
                    $product->product= $course['MODEL'];
                    $product->id_shipper= $id;
                    $product->save();

                    $price = new Price();
                    $price->price = $course['PRICE'];
                    $price->id_product= $id;
                    $price->save();



                }


                $query = new \yii\db\Query();
        $query->select('`shipper`.`shipper`, `product`.`product`, `price`.`price`')
            ->from('`shipper`')
            ->leftJoin('`product`', '`shipper`.`id` = `product`.`id_shipper`')
        ->leftJoin('`price`', '`product`.`id_shipper` = `price`.`id_product`');

        $command = $query->createCommand();
        $prodo = $command->queryAll();



               return $this->render('parser', ['prodo'=>$prodo]);


            } else {
                return false;
            }


        }
        return $this->render('upload', compact('model'));
    }

}




