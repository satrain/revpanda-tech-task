<?php

class Result extends Dbh {

    public $button_id;

    function __construct($id) {
        $this->button_id = $id;
    }

    private function fetchDataButtonOne() {
        $sql = "SELECT * FROM A";
        $stmt = $this->connect()->query($sql);
        echo 'Data from table A<br><br>';
        while($row = $stmt->fetch()) {
            echo $row['column_1'] . '<br>';
        }
    }

    private function fetchDataButtonTwo() {
        $sql1 = "SELECT * FROM A";
        $stmt1 = $this->connect()->query($sql1);
        echo '<h2>Data from table A</h2>';
        while($row = $stmt1->fetch()) {
            echo $row['column_1'] . '<br>';
        }
        echo '<hr>';

        $sql2 = "SELECT * FROM B";
        $stmt2 = $this->connect()->query($sql2);
        echo '<h2>Data from table B</h2>';
        while($row = $stmt2->fetch()) {
            echo $row['column_1'] . '<br>';
        }
        echo '<hr>';

        $sql3 = "SELECT * FROM C";
        $stmt3 = $this->connect()->query($sql3);
        echo '<h2>Data from table C</h2>';
        while($row = $stmt3->fetch()) {
            echo $row['column_1'] . '<br>';
        }
        echo '<hr>';
    }

    private function fetchDataButtonThree() {
        $sql1 = "SELECT * FROM C";
        $stmt1 = $this->connect()->query($sql1);
        echo '<h2>Data from table C</h2>';
        while($row = $stmt1->fetch()) {
            echo $row['column_1'] . '<br>';
        }
        echo '<hr>';

        $sql2 = "SELECT * FROM B";
        $stmt2 = $this->connect()->query($sql2);
        echo '<h2>Data from table B</h2>';
        while($row = $stmt2->fetch()) {
            echo $row['column_1'] . '<br>';
        }
        echo '<hr>';
    }

    private function fetchDataButtonFour() {
        $sql = "SELECT * FROM B ORDER BY column_1 ASC";
        $stmt = $this->connect()->query($sql);
        echo '<h2>Data from table B</h2>';
        while($row = $stmt->fetch()) {
            echo $row['column_1'] . '<br>';
        }
    }

    private function fetchDataButtonFive() {
        $sql = "SELECT * FROM B ORDER BY column_1 DESC";
        $stmt = $this->connect()->query($sql);
        echo '<h2>Data from table B</h2>';
        while($row = $stmt->fetch()) {
            echo $row['column_1'] . '<br>';
        }
    }

    public function showResult() {
        switch($this->button_id) {
            case 1:
                $this->fetchDataButtonOne();
                break;
            case 2:
                $this->fetchDataButtonTwo();
                break;
            case 3:
                $this->fetchDataButtonThree();
                break;
            case 4:
                $this->fetchDataButtonFour();
                break;
            case 5:
                $this->fetchDataButtonFive();
                break;
        }
    }

}