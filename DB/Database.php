<?php

class Database
{
    function get_connection()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=northwind;', 'root', "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR :" . $e->getMessage());
        }
        return $pdo;
    }
    function get_lists($sql)
    {
        $limite = 10;
        // $sql = "select * from " . $table;$query->bindValue('limite', $limite, PDO::PARAM_INT);
        $pdo = self::get_connection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    function get_pages($sql, $limite, $debut)
    {
        $reqet = $sql . '  ' . 'LIMIT :limite OFFSET :debut;';
        // $sql = "select * from " . $table;$query->bindValue('limite', $limite, PDO::PARAM_INT);
        $pdo = self::get_connection();
        $stmt = $pdo->prepare($reqet);
        $stmt->bindValue('limite', $limite, PDO::PARAM_INT);
        $stmt->bindValue('debut', $debut, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    function get_number_pages()
    {
        $sql = "SELECT COUNT(id) as 'numberpages' FROM `customers`;";
        $pdo = self::get_connection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $n = $row['numberpages'];
        }
        return $n;
    }
}
