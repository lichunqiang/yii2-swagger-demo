<?php

namespace app\modules\v1\controllers;

use yii\rest\Controller;

class UserController extends Controller
{
    /**
     * @SWG\Get(path="/users",
     *     tags={"user"},
     *     summary="获取用户列表",
     *     description="测试直接返回一个array",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "query",
     *        name = "access_token",
     *        description = "access token",
     *        required = true,
     *        type = "string"
     *     ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    public function actionIndex()
    {
        return [
            'errcode' => 0,
            'errmsg' => 'success',
        ];
    }

    /**
     * @SWG\Post(path="/users",
     *     tags={"user"},
     *     summary="创建用户接口",
     *     description="测试Param是 *query* 类型, 如果设置成 *formData* 类型的就可以使用post获取数据",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "query",
     *        name = "username",
     *        description = "用户姓名",
     *        required = true,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "query",
     *        name = "phone",
     *        description = "手机号",
     *        required = true,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "query",
     *        name = "sex",
     *        description = "性别 1. 男 2.女 此项为非必填项",
     *        required = false,
     *        type = "string"
     *     ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    public function actionCreate()
    {
        return \Yii::$app->request->get();
    }

    /**
     * @SWG\Put(path="/users/{id}",
     *     tags={"user"},
     *     summary="更新用户接口",
     *     description="*path*类型的参数会放入请求地址地址中",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "path",
     *        name = "id",
     *        description = "用户ID",
     *        required = true,
     *        type = "integer"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "username",
     *        description = "用户姓名",
     *        required = true,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "phone",
     *        description = "手机号",
     *        required = true,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "sex",
     *        description = "性别 1. 男 2.女 此项为非必填项",
     *        required = false,
     *        type = "string"
     *     ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     )
     * )
     *
     */
    public function actionUpdate($id)
    {
        return [
            'user_id' => $id,
            'post_data' => \Yii::$app->request->post(),
        ];
    }
}
