<?php

class PegawaiController extends Controller
{
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Pegawai');
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
        $model=new Pegawai;

        if(isset($_POST['Pegawai']))
        {
            $model->attributes=$_POST['Pegawai'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->pegawai_id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        if(isset($_POST['Pegawai']))
        {
            $model->attributes=$_POST['Pegawai'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->pegawai_id));
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
        $model=Pegawai::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='pegawai-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
?>
