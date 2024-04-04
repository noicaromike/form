<?php

class User
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getRoles()
    {
        $this->db->query('SELECT * FROM roles ORDER BY id ASC');
        $results = $this->db->resultSet();
        return $results;
    }
    public function getDepartments()
    {
        $this->db->query('SELECT * FROM departments ORDER BY id ASC');
        $results = $this->db->resultSet();
        return $results;
    }
    public function createAccount($data, $hashedpass)
    {
        $this->db->query('INSERT INTO users (
            firstname,
            lastname,
            role_id,
            department_id,
            username,
            password
        ) VALUES (
            :firstname,
            :lastname,
            :role_id,
            :department_id,
            :username,
            :password
        )');

        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':role_id', $data['role']);
        $this->db->bind(':department_id', $data['department']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $hashedpass);
        $result = $this->db->execute();
        return $result;
    }
    // total records for users
    public function getTotalRecords()
    {
        $this->db->query('SELECT count(*) AS total FROM users');
        $this->db->execute();
        $row = $this->db->single();
        return $row->total;
    }

    public function getAllUsers($currentPage, $recordsPerPage)
    {
        $offset = ($currentPage - 1) * $recordsPerPage;


        $this->db->query('SELECT users.*, roles.role AS role_name, departments.department AS dept_name
                         FROM users 
                         LEFT JOIN roles ON users.role_id = roles.id
                         LEFT JOIN departments ON users.department_id = departments.id
                         ORDER BY users.id DESC LIMIT :pages,:rows');
        $this->db->bind(':pages', $offset);
        $this->db->bind(':rows', $recordsPerPage);
        $this->db->execute();
        $results = $this->db->resultSet();
        return $results;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT users.*, roles.role AS role_name, departments.department AS dept_name
                            FROM users 
                            JOIN roles ON users.role_id = roles.id
                            JOIN departments ON users.department_id = departments.id
                            WHERE users.id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->rowCount() > 0) {
            return $this->db->single();
        } else {
            return false;
        }
    }
}
