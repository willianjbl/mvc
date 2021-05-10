<?php
declare(strict_types = 1);

namespace src\handlers;

use src\models\Test;

class TestHandler
{
    public function listUsers(): array
    {
        $result = [];

        $users = Test::select()->get();
        if (count($users) > 0) {            
            foreach ($users as $user) {
                $newUser = new Test();
                $newUser->setId(intval($user->id));
                $newUser->setName($user->name);
                $result[] = $newUser;
            }
        }
        return $result;
    }
}
