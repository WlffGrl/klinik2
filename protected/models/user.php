<?php

class User extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array(
            array('username, password, role', 'required'),
            array('username', 'length', 'max'=>50),
            array('password', 'length', 'max'=>255),
            array('role', 'in', 'range'=>array('admin', 'doctor', 'nurse', 'receptionist')),
        );
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

    public function isAdmin()
    {
        return $this->role === 'admin'; // Asumsikan Anda memiliki atribut role di tabel user
    }
}
