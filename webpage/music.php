<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$playlist = $_REQUEST["playlist"];
if($playlist=="mypicks.txt")
{
    include("mypicks.php");
}
else
{
    include("default.php");
}
