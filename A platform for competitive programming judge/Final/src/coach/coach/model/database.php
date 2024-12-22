<?php
class DatabaseOperations {
    private $connection;

    public function openConnection() {
        $this->connection = new mysqli("localhost", "root", "", "demodb");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }

    public function closeConnection() {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    public function insertUserData($tableName, $name, $gender, $email, $phone, $dob, $address, $joiningDate, $password, $confirmPassword, $file) {
        $sql = "INSERT INTO $tableName (
            Name, Gender, Email, Phone, Dob, Address, JoinDate, Password, ConfirmPassword, File
        ) VALUES (
            '$name', '$gender', '$email', '$phone', '$dob', '$address', '$joiningDate', '$password', '$confirmPassword', '$file'
        )";

        $result = $this->connection->query($sql);

        if (!$result) {
            echo "Error: " . $this->connection->error;
        }

        return $result;
    }

    public function loginUser($tableName, $email, $password) {
        $sql = "SELECT * FROM $tableName WHERE Email = '$email' AND Password = '$password'";
        $result = $this->connection->query($sql);

        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserInfo($tableName, $email) {
        $sql = "SELECT * FROM $tableName WHERE Email = '$email'";
        $result = $this->connection->query($sql);

        if ($result && $result->num_rows > 0) {
            $userData = $result->fetch_object();
            return $userData;
        } else {
            return null;
        }
    }

    private function largest() {
        $sql = "SELECT MAX(Post_ID) AS LargestPostID FROM notifications";
        $result = $this->connection->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $largestPostID = $row['LargestPostID'] + 1;
            return $largestPostID;
        }
        return 1;
    }

    public function getNot($offset, $limit) {
        $sql = "SELECT * FROM notifications ORDER BY Post_ID DESC LIMIT $offset, $limit";
        $result = $this->connection->query($sql);
    
        $nots = array();
    
        while ($row = $result->fetch_assoc()) {
            $nots[] = $row;
        }
    
        return $nots;
    }
}

?>
