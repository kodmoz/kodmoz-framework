<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 31.12.2017
 * Time: 19:11
 */

namespace Kodmoz;


class DatabaseController
{
    public function __construct()
    {
        $dbModel = new DatabaseModel();
        $dbModel->host = '';
        $dbModel->user = '';
        $dbModel->pass = '';
        $dbModel->name = '';
    }
}