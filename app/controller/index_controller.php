<?php

class index_controller extends app_controller {

    public function index($a = "", $b = '', $c = '') {
//            echo "INDEX-INDEXメソッド";
//            var_dump($this->config);
//            var_dump($GLOBALS['databases']);

        $this->model('test_model');
        $this->test_model->make();
        //echo "make()実行結果：" . $this->test_model->abc;
        $this->log->info("実行結果：".$this->test_model->abc);

/*
        $this->library('db');
        $this->db->connect();
        $ret = $this->db->select('SELECT * FROM member');
        $this->log->info($ret);
*/

        $this->library('db', 'asobi');
        $this->asobi->connect('asobi');
        $ret = $this->asobi->select('SELECT * FROM plan');
        $this->log->info($ret);

        $params['controller'] = $this->controller;
        $params['action'] = $this->action;
        $params['param1'] = $a;
        $params['param2'] = $b;
        $params['param3'] = $c;
        $this->view('test_aaa', $params);
    }
}

