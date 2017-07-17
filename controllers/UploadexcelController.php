<?php

namespace app\controllers;

use Yii;
use app\models\Uploadexcel;
use app\models\Seller;
use app\models\UploadexcelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Products;


/**
 * UploadexcelController implements the CRUD actions for Uploadexcel model.
 */
class UploadexcelController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Uploadexcel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UploadexcelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Uploadexcel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Uploadexcel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Uploadexcel();
        $seller="";
        if(isset($_GET['sellerid']) && !empty($_GET['sellerid']))
        {
          $sellerid=(int) $_GET['sellerid'];
          $seller=Seller::findOne($sellerid);
        }

        if ($model->load(Yii::$app->request->post())) {
      //    $model->filename="ll";
          $model->status="NA";
          $model->filename = UploadedFile::getInstance($model, 'filename');
                    if ($file=$model->upload()) {
                      $model->status = $file;
                      $handel=fopen("uploads/".$file,'r');
                      while($data=fgetcsv($handel,1000,",")){
                        $product=new Products;
                        $product->seller_name=$data[1];
                        $product->seller_email=$data[2];
                        $product->sku_id=$data[3];
                        $product->brand=$model->brand;
                        $product->product_title=$data[4];
                        $product->uploaded_date=date('Y-m-d');
                        $product->uploaded_on=$data[0];
                        $product->city="NA";
                        if(!$product->save())
                        print_r($product->getErrors());
                        else
                        $this->redirect('uploadexcel/index');
                      }

                    }else{
                      die("error uploading file");

                    }

        if(!$model->save())
        print_r($model->getErrors());
//            return $this->redirect(['view', 'id' => $model->_id]);
        } else {
            return $this->render('create', [
                'model' => $model,'seller'=>$seller
            ]);
        }
    }

    /**
     * Updates an existing Uploadexcel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Uploadexcel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Uploadexcel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Uploadexcel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Uploadexcel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
