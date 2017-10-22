<?php
abstract class ModelAbs
{
    protected static $db = null;

    protected static function getDB()
    {
        if (self::$db) {
            return self::$db;
        }
        self::$db = new MongoClient();
        return self::$db;
    }

    protected function getRows ()
    {

    }

}