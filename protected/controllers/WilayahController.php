<?php

class WilayahController extends Controller
{
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Wilayah');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionCreate()
    {
        $model=new Wilayah;

        if(isset($_POST['Wilayah']))
        {
            $model->attributes=$_POST['Wilayah'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        if(isset($_POST['Wilayah']))
        {
            $model->attributes=$_POST['Wilayah'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            $this->loadModel($id)->delete();
            if(!isset($_GET['ajax']))
                $this->redirect(array('index'));
        }
        else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }

    public function loadModel($id)
    {
        $model=Wilayah::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='wilayah-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
?>
