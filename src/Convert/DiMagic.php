<?php

namespace Convert;
/**
 * @date 2021-02-07
 * Class To
 */
class DiMagic extends To
{
    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        return null;
    }

    /**
     * @date 2021-02-07
     * @param $name
     * @param $value
     */
    public function __set($name, $value): void
    {
    }

    /**
     * @date 2021-02-07
     * @param array $data
     */
    public function __unserialize(array $data): void
    {
        foreach ($data as $k => $v) {
            $method = sprintf('set%s', ucfirst($k));
            if (method_exists($this, $method)) {
                $this->$method($v);
            }
        }
    }

    /**
     * @date 2021-02-07
     * @return array
     */
    public function __serialize(): array
    {
        return $this->toArray();
    }
}