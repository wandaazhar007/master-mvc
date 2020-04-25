<?php
/**
 * MyFramework
 * @author	Wanda Azhar
 * @copyright	24-04-2020
 * Github: https://github.com/wandaazhar007/
 * Instagram: @wanda_azharr
 */

if(!session_id()) {
    session_start();
}
    require_once('../app/init.php');
    $app = new App;
?>