<?php

namespace app\modules\v1\controllers;

use Yii;
use yii\rest\Controller;
use yii\rest\OptionsAction;

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
            'action' => $this->action->id,
            'items' => [],
        ];
    }

    /**
     * @SWG\Post(path="/users",
     *     tags={"user"},
     *     summary="创建用户接口",
     *     description="测试Param是 *query* 类型, 如果设置成 *formData* 类型的就可以使用post获取数据",
     *     produces={"application/json"},
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
     *        description = "性别 1. 男 2.女 此项为非必填项.展示成select",
     *        required = false,
     *        type = "integer",
     *        enum = {1, 2}
     *     ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     ),
     *     @SWG\Response(
     *         response = 401,
     *         description = "需要重新登陆",
     *         @SWG\Schema(ref="#/definitions/Error")
     *     )
     * )
     *
     */
    public function actionCreate()
    {
        return [
            'action' => $this->action->id,
            'post_data' => Yii::$app->getRequest()->post(),
        ];
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
     *        description = "性别 1. 男 2.女 此项为非必填项.这里指定了一个默认项，那么会默认选中",
     *        required = false,
     *        type = "integer",
     *        default = 1,
     *        enum = {1, 2}
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "job",
     *        description = "这里可以设置默认值",
     *        required = false,
     *        type = "string",
     *      default = "程序猿"
     *    ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "avatar",
     *        description = "类型设置为`file`则可以展示上传按钮，在后端和普通上传一样处理",
     *        required = false,
     *        type = "file"
     *    ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     ),
     *     @SWG\Response(
     *         response = 401,
     *         description = "需要重新登陆",
     *         @SWG\Schema(ref="#/definitions/Error")
     *     )
     * )
     * @param integer $id
     *
     * @return array
     */
    public function actionUpdate($id)
    {
        return [
            'action' => $this->action->id,
            'user_id' => $id,
            'post_data' => Yii::$app->request->post(),
        ];
    }

    /**
     * @SWG\Post(
     *	path = "/users/query",
     *	tags = {"user"},
     *	operationId = "QueryUser",
     *	summary = "删除用户",
     *	description = "这里展示一个稍微高端点的用法",
     *	produces = {"application/json"},
     *	consumes = {"application/json"},
     *	@SWG\Parameter(
     *		in = "body",
     *		name = "body",
     *		description = "这里要主要配置`request`组件的parsers，来支持接收这个类型的请求",
     *		required = true,
     *		type = "string",
     *      @SWG\Schema(ref = "#/definitions/UserIdList")
     *    ),
     *	@SWG\Response(response = 200, description = "success")
     *)
     */
    public function actionQuery()
    {
        return [
            'action' => $this->action->id,
            'data' => Yii::$app->request->post(),
        ];
    }

    /**
     * @SWG\Options(
     *	path = "/users",
     *	tags = {"user"},
     *	operationId = "userOptions",
     *	summary = "options",
     *	produces = {"application/json"},
     *	consumes = {"application/json"},
     *	@SWG\Response(
     *     response = 200,
     *     description = "success",
     *     @SWG\Header(header="Allow", type="GET, POST, HEAD, OPTIONS"),
     *     @SWG\Header(header="Content-Type", type="application/json; charset=UTF-8")
     *  )
     *)
     */
    public function actions()
    {
        return [
            'options' => OptionsAction::class,
        ];
    }
}
