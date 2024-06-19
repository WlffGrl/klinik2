<?php

class Appointment extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'appointments';
        return 'users';
    }

    public function rules()
    {
        return array(
            array('patient_id, appointment_date, doctor_id, reason', 'required'),
            array('patient_id', 'numerical', 'integerOnly'=>true),
            array('reason', 'safe'),
        );
    }

    public function relations()
    {
        return array(
            'doctor' => array(self::BELONGS_TO, 'User', 'doctor_id'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'patient_id' => 'Patient ID',
            'appointment_date' => 'Appointment Date',
            'doctor_id' => 'Doctor ID',
            'reason' => 'Reason',
        );
    }
}
