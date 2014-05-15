<?php

class usersController extends Controller {

    protected function init() {
        $this->db = new PDOAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], $this->cfg['db']['password'], $this->cfg['db']['database']);
    }

    public function index() {
        $data = $this->_model->home();
        $this->view->set('items', $data);
        return $this->view();
    }

    public function add($userName, $depId) {
        if (!empty($userName) && !empty($depId)) {
            $data = $this->_model->add($userName,$depId);
        }
        MyHelpers::redirect(__FUNCTION__);
    }

    public function edit($id, $name = '', $depId='') {
        if (isset($_POST['cancel'])) {
           MyHelpers::redirect(__FUNCTION__);
        }
        if (isset($_POST['dep']) && isset($_POST['un'])) {
            $data = $this->_model->edit($id, $_POST['un'], $_POST['dep']);
            MyHelpers::redirect(__FUNCTION__);
        }

        if (!empty($id)) {
            $data = $this->_model->edit($id, $name = '',$_POST['dep']='');
        }
        $this->view->set('items', $data);
        return $this->view();
    }

    public function delete($id) {
        if (!empty($id)) {
            $data = $this->_model->delete($id);
        }
        MyHelpers::redirect(__FUNCTION__);
    }

}
