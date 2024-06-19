<?php

class Obat extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'obat';
    }

    public function rules()
    {
        return array(
            array('nama, jenis, harga, stok, tanggal_kadaluarsa', 'required'),
            array('harga', 'numerical'),
            array('stok', 'numerical', 'integerOnly'=>true),
            array('nama, jenis', 'length', 'max'=>255),
            array('tanggal_kadaluarsa', 'date', 'format'=>'yyyy-MM-dd'),
            array('obat_id, nama, jenis, harga, stok, tanggal_kadaluarsa', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'obat_id' => 'ID Obat',
            'nama' => 'Nama',
            'jenis' => 'Jenis',
            'harga' => 'Harga',
            'stok' => 'Stok',
            'tanggal_kadaluarsa' => 'Tanggal Kadaluarsa',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('obat_id', $this->obat_id);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('jenis', $this->jenis, true);
        $criteria->compare('harga', $this->harga);
        $criteria->compare('stok', $this->stok);
        $criteria->compare('tanggal_kadaluarsa', $this->tanggal_kadaluarsa, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}
?>
