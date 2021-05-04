<?php

namespace src\handlers;

use src\models\User;

class UserHandler
{
    public function listUsers(): array
    {
        $result = [];

        $users = User::select()->get();
        if (count($users) > 0) {            
            foreach ($users as $user) {
                $newUser = new User();
                $newUser->setId($user->id);
                $newUser->setName($user->name);
                $result[] = $newUser;
            }
        }
        return $result;
    }
}
