<?php

namespace Framework;

use Framework\Session;

class Authorization
{
    /**
     * Check if logged in user owns the resource
     * 
     * @param int|string $resourceId
     * @return bool
     */
    public static function isOwner($resourceId)
    {
        $sessionUser = Session::get('user');
        
        if ($sessionUser !== null && isset($sessionUser['id'])) {
            $sessionUserId = (int) $sessionUser['id'];
            return $sessionUserId === (int) $resourceId;
        }

        return false;
    }
}
