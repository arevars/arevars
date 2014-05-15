<?php

class usersModel extends Model {

    protected function init() {
        
    }

    public function home() {
        $data = array();
        $data_arranged = array();
        $query = "SELECT departments.name as dn,
                        users.name as un,
                        users.id as uid, 
                        departments.id as did 
                        FROM departments 
                    LEFT JOIN users on departments.id=users.dep_id";
        $data = $this->db->select($query);
        return $data;
    }

    public function add($userName, $depId) {
        $query = "INSERT INTO users SET name='$userName', dep_id=$depId";
        $data = $this->db->update($query);
        return $data;
    }

    public function edit($id, $name, $depId) {        
        if(empty($depId)) {
            $query = "SELECT departments.name as dn,
                        users.name as un,
                        users.id as uid, 
                        departments.id as did 
                        FROM departments 
                    LEFT JOIN users on departments.id=users.dep_id";
            
            $data = $this->db->select($query);
            foreach($data as $v) {
                if($v['uid'] == $id) {
                    $selected['selected']['did'] = $v['did'];
                    $selected['selected']['un'] = $v['un'];
                }
            }           
            array_unshift($data,$selected);

        } else {           
            $query = "UPDATE users SET name='$name', dep_id=$depId WHERE id = '$id'";
            $data = $this->db->update($query);
        }

        return $data;
    }

    public function delete($id) {
        $query = "DELETE FROM users WHERE id = $id";
        $data = $this->db->delete($query);
        return $data;
    }

}
