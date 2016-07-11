<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $title = "服务号";
        $this->assign('title', $title);

        $bannerArr = array(
            1 => array(
                "href" => 'javascript:void(0)',
                "img" => 'offline-banner.jpg'
            ),
            2 => array(
                "href" => 'javascript:void(0)',
                "img" => 'offline-banner.jpg'
            ),
            3 => array(
                "href" => 'javascript:void(0)',
                "img" => 'offline-banner.jpg'
            ),
            4 => array(
                "href" => 'javascript:void(0)',
                "img" => 'offline-banner.jpg'
            ),
        );
        $this->assign('bannerArr', $bannerArr);

        $this->display('index');
    }

    public function self()
    {
        $this->display();
    }

    public function discovery()
    {
        $this->display();
    }
}