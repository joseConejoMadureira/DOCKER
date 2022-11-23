<?php

namespace src\Dao;

use PDO;
use PDOException;
use LogsW;

class ConnectionPDO
{
    public static $instance;
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new
                    PDO(
                        $_ENV['DSN_pgsql'],
                        $_ENV['DB_USERNAME'],
                        $_ENV['DB_PASSWORD'],
                        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                    );
            } catch (PDOException $e) {
                LogsW::write($e);
            }
        }
        return self::$instance;
    }
}
