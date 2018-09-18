<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
use think\Route;
Route::group('', function(){
    // 后台
    Route::group('backend', function(){
        Route::get('index', 'index/index/index'); // 后台首页
        Route::get('controller', 'index/index/controller'); // 后台首页控制台
        // 后台管理员操作管理
        Route::group('adminer', function(){
            Route::get('list', 'userrelated/admins/showlist'); // 管理员列表模板
            Route::post('listdatas', 'userrelated/admins/list_datas'); // 获取管理员数据(多条)
            Route::post('one', 'userrelated/admins/get_one_data'); // 获取管理员数据(单条)
            Route::post('create', 'userrelated/admins/add'); // 新增管理员
            Route::post('remove', 'userrelated/admins/delete'); // 删除管理员
            Route::post('edit', 'userrelated/admins/update'); // 编辑管理员资料
            Route::post('check', 'userrelated/admins/check_adminer'); // 后台人员登录校验
            Route::post('depmtrole', 'userrelated/admins/get_dprole_list'); // 获取部门与角色数据
            Route::post('giveauth', 'userrelated/admins/distribution_auth'); // 分配权限
        });

        Route::get('login', 'userrelated/admins/login'); // 后台人员登录页面
        Route::post('logout', 'userrelated/admins/logout'); // 后台退出登录

        // 部门
        Route::group('bumen', function(){
            Route::get('list', 'userrelated/department/showlist'); // 列表
            Route::post('one', 'userrelated/admins/get_one_data'); // 获取数据(单条)
            Route::post('create', 'userrelated/department/add'); // 新增数据
            Route::post('remove', 'userrelated/department/delete'); // 删除数据
            Route::post('edit', 'userrelated/department/update'); // 编辑数据
        });

        // 系统设置
        Route::group('sysconf', function(){
            Route::get('lfmulist', 'systemconfig/leftmenu/showlist'); // 左侧菜单栏列表
            Route::post('lfmucreate', 'systemconfig/leftmenu/add'); // 新增左侧菜单栏
            Route::post('lfmuremove', 'systemconfig/leftmenu/delete'); // 删除左侧菜单栏
            Route::post('lfmuedit', 'systemconfig/leftmenu/update'); // 编辑删除左侧菜单栏
            Route::get('paramlist', 'systemconfig/paramconfig/showlist'); // 参数列表
            Route::post('paramcreate', 'systemconfig/paramconfig/add'); // 新增参数
            Route::post('paramremove', 'systemconfig/paramconfig/delete'); // 删除参数
            Route::post('paramedit', 'systemconfig/paramconfig/update'); // 编辑参数
        });

        // 角色
        Route::group('position', function(){
            Route::get('list', 'userrelated/role/showlist'); // 列表
            Route::post('one', 'userrelated/role/get_one_data'); // 获取数据(单条)
            Route::post('create', 'userrelated/role/add'); // 新增数据
            Route::post('remove', 'userrelated/role/delete'); // 删除数据
            Route::post('edit', 'userrelated/role/update'); // 编辑数据
            Route::get('auth/:id/:type', 'userrelated/role/auth_showlist'); // 权限列表(type说明是用户id还是角色id，可选[role/adminer])
            Route::post('giveauth', 'userrelated/role/distribution_auth'); // 分配权限
        });

    });

    // 前端
    Route::group('web', function(){
        Route::get('index', 'webshow/index/index'); // 首页

    });
});
