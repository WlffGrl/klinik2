<?php

class WebUser extends CWebUser
{
    protected $_model;

    function isAdmin()
    {
        $user = $this->loadUser();
        return $user && $user->isAdmin();
    }

    protected function loadUser()
    {
        if ($this->_model === null) {
            $this->_model = User::model()->findByPk($this->id);
        }
        return $this->_model;
    }
}
