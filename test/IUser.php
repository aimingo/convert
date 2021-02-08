<?php

interface IUser
{
    public static function convert2IUser($data): IUser;

    public function getUid(): int;

    /**
     * @param int $uid
     */
    public function setUid(int $uid): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return int
     */
    public function getAge(): int;

    /**
     * @param int $age
     */
    public function setAge(int $age): void;

    /**
     * @return Iuser
     */
    public function getMate(): Iuser;

    /**
     * @param Iuser $mate
     */
    public function setMate(Iuser $mate): void;
}