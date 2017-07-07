<?php

/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 07/07/2017
 * Time: 23:35
 */

class DatabaseConnexion
{
    private static $db;

   /* private $params = [
        'host'=>'127.0.0.1',
        'dbName'=>'MVC_Tutorial',
        'username'=>'root',
        'password'=>'root'
    ];
*/
   //'mysql:host=127.0.0.1;port=8889;dbname=MyBlog;charset=utf8', 'root', 'root'

    public static function getDatatabaseConnect()
    {
        $params = [
            'hostAndPort'=>'127.0.0.1;port=8889;',
            'dbName'=>'mvc-tutorial;charset=utf8',
            'username'=>'root',
            'password'=>'root'
        ];

        if(self::$db === null)
        {
            $db = new PDO('mysql:host='.$params['hostAndPort'].'dbname='.$params['dbName'],
                    $params['username'],$params['password']
            );

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $db;
    }

}