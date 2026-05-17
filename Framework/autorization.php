<?php

namespace Framework;

use Framework\Session;

class authorization
{
    /**
     * check if loggeg in user owns the listing \
     * 
     * @params int $resourcesId
     * @return bool
     */
    public static function isOwner($resourcesId)
    {
        $sessionUser = Session::get('user');

        if ($sessionUser !== null && $sessionUser['id'] === $resourcesId) {
            $sessionUser = (int) $sessionUser['id'];
            return $sessionUser === $resourcesId;
        }

        return false;
    }
}
