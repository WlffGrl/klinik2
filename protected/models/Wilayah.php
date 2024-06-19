<?php

class Wilayah extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'wilayah';
    }

    public function rules()
    {
        return array(
            array('nama, provinsi', 'required'),
            array('nama, provinsi', 'length', 'max'=>255),
            array('id, nama, provinsi', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'nama' => 'Nama',
            'provinsi' => 'Provinsi',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('nama',$this->nama,true);
        $criteria->compare('provinsi',$this->provinsi,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
?>
