<?php

    class Dbh {

        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbName = 'revpanda';
        private $conn;

        public function connect() {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $this->conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $this->conn;
        }

        public function createDb() {
            try{
                $dbh = new PDO("mysql:host=$this->host", $this->user, $this->pass);
                $sql = "CREATE DATABASE $this->dbName";
                $dbh->exec($sql);

                echo 'Database ' . $this->dbName . ' successfully created';
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function createTables() {
            try {
                $sql_a = "CREATE TABLE A(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    column_1 VARCHAR(50) NOT NULL
                )";

                $this->conn->exec($sql_a);
                echo '<br>Table A created successfully';

                $sql_b = "CREATE TABLE B(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    column_1 INT(30) NOT NULL
                )";

                $this->conn->exec($sql_b);
                echo '<br>Table B created successfully';

                $sql_c = "CREATE TABLE C(
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    column_1 VARCHAR(50) NOT NULL
                )";

                $this->conn->exec($sql_c);
                echo '<br>Table C created successfully';


            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }

    }