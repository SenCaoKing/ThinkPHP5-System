<?php
namespace app\userrelated\controller;

/**
 * @author Sen
 * QQ：2814073941
 * 框架版本：ThinkPHP V 5.0.20
 * 【功能】：用户管理Controller类
 * Date: 2018/3/14
 */
use app\commonuse\controller\Allcontroller;
use think\Request;
use app\userrelated\validate\AdminsValidate; // 本类验证器
class Admins extends Allcontroller {
    private $model; // 用户初始化model对象的变量

    /**
     * 增
     */
    public function add( Request $request, AdminsValidate $adminsvalidate){
//        try{
//            $datas = $request->post(); // 获取请求数据
//
//
//        } catch (\Exception $e){
//            return return_exception($e);
//        }

        return view();
    }

    // 用户列表
    public function showlist(){
        return view();
    }

    // 用户登录页面
    public function login(){

        return view();
    }

    // 用户退出登录
    public function logout(){

        return 123;
    }
}
