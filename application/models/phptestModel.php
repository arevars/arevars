<?php

class phptestModel extends Model {

    protected function init() {
        
    }

    public function home() {
        $data = array();
        $data_arranged = array();
        $query = "SELECT departments.name as dn, users.name as un, users.id as uid, departments.id as did FROM departments 
                    LEFT JOIN users on departments.id=users.dep_id";
        $data =  $this->db->select($query);       
        return $data;
    }
    public function departments($id) {
        $query = "SELECT departments.name as dn, users.name as un, users.id as uid, departments.id as did FROM departments 
                    LEFT JOIN users on departments.id=users.dep_id WHERE departments.id={$id}";
        $data = $this->db->select($query);
        return $data;
    }
    public function users() {
        $data = array();
        $data_arranged = array();
        $query = "SELECT departments.name as dn, users.name as un, users.id as uid, departments.id as did FROM departments 
                    LEFT JOIN users on departments.id=users.dep_id";
        $data = $this->db->select($query);
        return $data;
    }

}
