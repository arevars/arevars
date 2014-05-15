<?php

class departmentsController extends Controller {

    protected function init() {
        $this->db = new PDOAdapter($this->cfg['db']['hostname'], $this->cfg['db']['username'], $this->cfg['db']['password'], $this->cfg['db']['database']);
    }

    public function index() {
        $data = $this->_model->home();
        $this->view->set('items', $data);
        return $this->view();
    }

    public function add($dep_name) {
        if (!empty($dep_name)) {
            $data = $this->_model->add($dep_name);
        }
        MyHelpers::redirect(__FUNCTION__);
    }

    public function edit($id, $name = '') {
        if (isset($_POST['cancel'])) {
           MyHelpers::redirect(__FUNCTION__);
        }
        if (isset($_POST['dep'])) {
            $data = $this->_model->edit($id, $_POST['dep']);
            MyHelpers::redirect(__FUNCTION__);
        }

        if (!empty($id)) {
            $data = $this->_model->edit($id, $name = '');
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
