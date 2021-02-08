<?php

namespace Convert;
/**
 * Object conversion interface implementation
 */
class To implements ITo
{

    /**
     * @date 2021-02-07
     * @return string
     */
    public function toJsonString(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * @date 2021-02-07
     * @return array
     */
    public function toArray(): array
    {
        return Helper::toArray($this);
    }
}