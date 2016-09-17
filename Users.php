<?php
namespace Timecamp\Api;

/**
 * Class Users
 * @link https://github.com/timecamp2/timecamp-api/blob/master/sections/users.md
 * @package Timecamp\Api
 */
class Users extends AbstractApi
{

    /**
     * Return all users from account.
     *
     * @return array
     */
    public function all()
    {
        return $this->request('GET', 'users/');
    }

}

?>