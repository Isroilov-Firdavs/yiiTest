<?php
namespace restapi\models;


class User extends \common\models\User
{
    public function fields()
    {
        return [
            'id',
            'username',
            'status',
            'email',
            'is_admin',
            
        ];
    }

    // http://fool.loc/api/users?expand=email,role
    // public function extraFields()
    // {
    //     return [
    //         'email',
    //         'role' => function( $model ) {
    //             return $model->email.' / '.$model->status;
    //         }
    //     ];
    // }
}




?>