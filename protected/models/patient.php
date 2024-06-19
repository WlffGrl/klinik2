<?php

class Patient extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'patients';
    }

    public function rules()
    {
        return array(
            array('first_name, last_name, date_of_birth, gender', 'required'),
            array('first_name, last_name', 'length', 'max'=>50),
            array('gender', 'in', 'range'=>array('male', 'female', 'other')),
            array('contact_number', 'length', 'max'=>15),
            array('address', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'patient_id' => 'Patient ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'date_of_birth' => 'Date of Birth',
            'gender' => 'Gender',
            'contact_number' => 'Contact Number',
            'address' => 'Address',
        );
    }
}
