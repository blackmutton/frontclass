<?php
include "../db01/base.php";
dd($_GET);
$Student = new DB("students");
$Student->save($_GET);
to("../db01/index.php");
