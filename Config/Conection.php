<?php

/**
 * Conexión al gestor de base de datos MySQL mediante PDO (PHP Data Object).
 */
class Database
{
    /**
     * Retorna la conexión a la base de datos, mediante PDO.
     * @return Object $pdo Objeto con la conexión a la base de datos.
     */
    public static function Conectar()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'financial_fast';
        try {
            $pdo = new PDO("mysql:host={$host};dbname={$db_name};charset=utf8", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $pdo;
    }
}
