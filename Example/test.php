<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 3/25/14
 * Time: 4:33 PM
 */

sql_query("UPDATE MESSAGE SET VIEW_NUM=VIEW_NUM + 1" . ' AND A = 1');

// This is second context
sql_query("UPDATE MESSAGE SET VIEW_NUM=VIEW_NUM + 1");
