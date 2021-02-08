<?php

class User extends \Convert\DiMagic implements IUser
{
    /*  @var int $uid */
    private $uid;
    /*  @var string $name */
    private $name;
    /*  @var int $age */
    private $age;
    /*  @var Iuser $mate */
    private $mate;

    public static function convert2IUser($data): IUser
    {
        return \Convert\Helper::toObject($data, User::class);
    }

    /**
     * @return int
     */
    public function getUid(): int
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid(int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return Iuser
     */
    public function getMate(): Iuser
    {
        return $this->mate;
    }

    /**
     * @param Iuser $mate
     */
    public function setMate(Iuser $mate): void
    {
        $this->mate = $mate;
    }
}