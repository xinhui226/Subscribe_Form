<?php

function connectToDB()
{
    return new PDO('mysql:host=devkinsta_db;dbname=Subscribe_Form',
  'root',
  'cD4FYhCb9HPk9bc0');
}