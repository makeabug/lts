<?php

abstract class LearnTrackActiveRecord extends CActiveRecord
{
    protected function beforeValidate()
    {
        if ($this->isNewRecord)
        {
            $this->create_time = $this->update_time = time();
            $this->create_user_id = $this->update_user_id = Yii::app()->user->id;
        } else {
            $this->update_time = time();
            $this->update_user_id = Yii::app()->user->id;
        }
        
        return parent::beforeValidate();
    }
}