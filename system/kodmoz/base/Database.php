<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 2.01.2018
 * Time: 13:55
 */

namespace Kodmoz;


class Database
{
    public function __construct()
    {
        $dbModel = new DatabaseModel();
        $dbModel->host = '';
        $dbModel->user = '';
        $dbModel->pass = '';
        $dbModel->name = '';
    }

    public function query($sql){

    }
}