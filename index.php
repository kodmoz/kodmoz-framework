<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 31.12.2017
 * Time: 19:20
 */
namespace  Kodmoz;
require_once('./system/kodmoz/Config.php');
require_once('./system/kodmoz/Kodmoz.php');

$configuration = new Config();
$kodmoz = new Kodmoz();

$kodmoz->kodmozInit($configuration);

