<?php
namespace App\Controller;
use App\Controller\AppController;
class TestController extends AppController {
    function index() {
        //初期表示処理
    }

    /**
     * Ajax用関数
     */
    function ajaxTest() {
        $this->autoRender = FALSE;
        if($this->request->is('ajax')) {
            return $this->data['name']."さん、こんにちは";   //echoでもOK
        }
    }
}