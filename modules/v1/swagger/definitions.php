<?php

namespace app\models\v1\swagger;

/**
 * @SWG\Definition(
 *      definition="Error",
 *      required={"code", "message"},
 *      @SWG\Property(
 *          property="code",
 *          type="integer",
 *          format="int32",
 *          example=401
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          type="string",
 *          example="You are requesting with an invalid credential."
 *      )
 * )
 */

/**
 * @SWG\Definition(required={"id"}, @SWG\Xml(name="Id"))
 */
class Id
{
    /**
     * 用户ID
     *
     * @SWG\Property(example = 10000)
     *
     * @var integer
     */
    public $id;
}

/**
 * @SWG\Definition(required={"access_token", "username"}, @SWG\Xml(name="UserIdList"))
 */
class UserIdList
{
    /**
     * Access Token
     *
     * @SWG\Property()
     *
     * @var string
     */
    public $access_token;
    /**
     * @SWG\Property()
     *
     * @var Id[]
     */
    public $idList;
}