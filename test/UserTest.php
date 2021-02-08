<?php


use PHPUnit\Framework\TestCase;

include './IUser.php';
include './User.php';

class UserTest extends TestCase
{

    public function testConvert2IUser()
    {
        $data = [
            'uid'  => 1000,
            'name' => 'aaa',
            'age'  => 21,
        ];
        $obj  = User::convert2IUser($data);
        $this->assertEquals($data['uid'], $obj->getUid());
    }
}
