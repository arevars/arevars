<?php

class phptestController extends Controller {

    protected function init() {
        $this->db = new PDOAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], $this->cfg['db']['password'], $this->cfg['db']['database']);
    }

    public function index() {
        $data = $this->_model->home();
        $this->view->set('items', $data);
        return $this->view();
    }
    
    public function departments($id=1) {
        $data = $this->_model->departments($id);
        $this->view->set('items', $data);
        return $this->view();
    }
    public function users() {
        $data = $this->_model->users();
        $this->view->set('items', $data);
        return $this->view();
    }

}
