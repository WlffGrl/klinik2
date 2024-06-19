<?php

class Pegawai extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'pegawai';
    }

    public function rules()
    {
        return array(
            array('nama, alamat, tanggal_lahir, jabatan, gaji, tanggal_mulai_kerja', 'required'),
            array('gaji', 'numerical'),
            array('nama, alamat, jabatan', 'length', 'max'=>255),
            array('tanggal_lahir, tanggal_mulai_kerja', 'date', 'format'=>'yyyy-MM-dd'),
            array('pegawai_id, nama, alamat, tanggal_lahir, jabatan, gaji, tanggal_mulai_kerja', 'safe', 'on'=>'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'pegawai_id' => 'ID Pegawai',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jabatan' => 'Jabatan',
            'gaji' => 'Gaji',
            'tanggal_mulai_kerja' => 'Tanggal Mulai Kerja',
        );
    }

    public function search()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('pegawai_id',$this->pegawai_id);
        $criteria->compare('nama',$this->nama,true);
        $criteria->compare('alamat',$this->alamat,true);
        $criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
        $criteria->compare('jabatan',$this->jabatan,true);
        $criteria->compare('gaji',$this->gaji);
        $criteria->compare('tanggal_mulai_kerja',$this->tanggal_mulai_kerja,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
?>
