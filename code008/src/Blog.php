<?php 

declare(strict_types=1);

class Blog {
    private static PDO $connection = null;

    private function __construct()
    {
        try {
            self::$connection = new PDO('mysql:host=mysql;dbname=exemplo', 'pablo', 'PB-Le@MARIADB369');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function createBdConnection(): Blog
    {
        if (self::$connection == null) {
            return new Blog();
        }
        return self::$connection;
    }

    public function create(
        int $id, 
        string $title,
        string $description, 
        string $date
    ): int {
        $sql = "insert into blog(id, title, description, date) values(?, ?, ?, ?)";

        $prepare = self::$connection->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->bindParam(2, $title);
        $prepare->bindParam(3, $description);
        $prepare->bindParam(4, $date);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function read(): array
    {
        $sql = 'select * from blog';

        echo '<h3>Posts: </h3>';

        $posts = [];

        foreach (self::$connection->query($sql) as $value) {
            array_push($posts, $value);
        }

        return $posts;
    }

    public function update(string $title): int
    {
        $sql = 'update blog set title = ? where id = ?';
        $prepare = self::$connection->prepare($sql);
        $prepare->bindParam(1, $title);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int
    {
        $sql = 'delete from blog where id = ?';
        $prepare = self::$connection->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}