<?php

class departmentsModel extends Model {

    protected function init() {
        
    }

    public function home() {
        $data = array();
        $query = "SELECT * FROM departments ORDER BY id ASC";
        $data = $this->db->select($query);
        return $data;
    }

    public function add($dep_name) {
        $query = "INSERT INTO departments SET name='$dep_name'";
        //$query = "INSERT INTO departments (name) VALUES ($dep_name)";
        $data = $this->db->update($query);
        return $data;
    }

    public function edit($id, $name) {
        if (empty($name)) {
            $query = "SELECT * FROM departments WHERE id = $id";
            $data = $this->db->select($query);
        } else {
            $query = "UPDATE departments SET name='$name' WHERE id = '$id'";
            $data = $this->db->update($query);
        }

        return $data;
    }

    public function delete($id) {
        $query = "DELETE FROM departments WHERE id = $id";
        //$query = "INSERT INTO departments (name) VALUES ($dep_name)";
        $data = $this->db->delete($query);
        return $data;
    }

}
