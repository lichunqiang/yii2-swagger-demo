<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * @SWG\Get(path="/users",
 *     tags={"user"},
 *     summary="获取用户列表",
 *     description="This can only be done by the logged in user.",
 *     produces={"application/json"},
 *     @SWG\Parameter(
 *        in = "query",
 *        name = "access_token",
 *        description = "access token",
 *        required = true,
 *        type = "string"
 *     ),
 *     @SWG\Parameter(
 *         in="body",
 *         name="body",
 *         description="Created user object",
 *         required=false,
 *         @SWG\Schema(ref="#/definitions/ApiResponse")
 *     ),
 *
 *     @SWG\Response(
 *         response = 200,
 *         description = " success",
 *         @SWG\Schema(
 *            ref = "#/definitions/ApiResponse"
 *         )
 *     )
 * )
 *
 * @SWG\Options(
 *     path = "/users",
 *     tags = {"user"},
 *     description = "用户获取请求允许的请求头",
 *     summary = "获取请求options",
 *     @SWG\Parameter(
 *        in = "body",
 *        name = "username",
 *        description = "user's name",
 *        required = true,
 *        type = "string",
 *        @SWG\Schema(
 *            ref = "#/definitions/ApiResponse"
 *         )
 *     ),
 *     @SWG\Response(
 *         response = 200,
 *         description="nothing response",
 *         @SWG\Header(header="xxww--af", type="string", description="fdsfs"),
 *         @SWG\Header(header = "X-Rate-Limit", type = "string", format = "date-time", description = "description")
 *     ),
 * )
 *
 */
class UserController extends ActiveController
{
	public $modelClass = 'app\models\User';
}
