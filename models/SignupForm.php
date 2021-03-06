<?php
/**
 * Created by PhpStorm.
 * User: I&I
 * Date: 04.11.2018
 * Time: 23:45
 */

namespace app\models;


use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
       return [
           [['name', 'email', 'password'], 'required'],
           [['email'], 'string'],
           [['email'], 'email'],
          [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email']
       ];
    }

    public function signup()
    {
        if ($this->validate()){
            $user = new User();
            $user->attributes = $this->attributes;
            return  $user->save(false);
        }
    }


}