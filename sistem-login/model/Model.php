<?php

class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new SQLite3('./db.sqlite');
        $init_query = "CREATE TABLE users (email TEXT NOT NULL PRIMARY KEY, password TEXT NOT NULL)";
        $this->db->query($init_query);
    }

    public function __query($dbhandle, $query)
    {
        return $dbhandle->query($query);
    }

    public function create_user($email, $password)
    {
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $this->__query($this->db, $query);
    }

    public function delete_user($email)
    {
        $query = "DELETE FROM users WHERE email = '$email'";
        $this->__query($this->db, $query);
    }

    public function get_password($email)
    {
        $query = "SELECT password FROM users WHERE email = '$email'";
        $result = $this->db->query($query);
        $row = $result->fetchArray();
        return $row['password'];
    }

    public function set_password($email, $password)
    {
        $query = "UPDATE users SET password = '$password' WHERE email = '$email'";
        return $this->db->query($query);
    }

    public function set_email($email, $newemail)
    {
        $query = "UPDATE users SET email = '$newemail' WHERE email = '$email'";
        return $this->db->query($query);
    }

    public function has_email($email): bool
    {
        $query = "SELECT email from users where email = '$email'";
        $result = $this->db->query($query);
        $row = $result->fetchArray();
        if ($row['email'] == null) {
            return false;
        } else {
            return true;
        }
    }


}