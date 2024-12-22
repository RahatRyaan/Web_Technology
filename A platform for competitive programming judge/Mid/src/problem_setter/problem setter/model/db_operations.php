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

    public function insertUserData($tableName, $firstName, $lastName, $email, $dob, $gender, $organization, $country, $phone, $bio, $password, $profilePicture) {
        $sql = "INSERT INTO $tableName (
            FirstName, LastName, Email, Dob, Gender, Organization, Country, Phone, Bio, Password, ProfilePicture
        ) VALUES (
            '$firstName', '$lastName', '$email', '$dob', '$gender', '$organization', '$country', '$phone', '$bio', '$password', '$profilePicture'
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

    public function updateUserData($tableName, $email, $firstName, $lastName, $dob, $gender, $organization, $country, $phone, $bio) {
        $sql = "UPDATE $tableName SET
            FirstName = '$firstName',
            LastName = '$lastName',
            Dob = '$dob',
            Gender = '$gender',
            Organization = '$organization',
            Country = '$country',
            Phone = '$phone',
            Bio = '$bio'
        WHERE Email = '$email'";
    
        $result = $this->connection->query($sql);
    
        return $result;
    }

    public function updatePassword($tableName, $email, $newPassword) {
        $sql = "UPDATE $tableName SET
            Password = '$newPassword'
        WHERE Email = '$email'";
    
        $result = $this->connection->query($sql);
    
        return $result;
    }
}

?>
