<?php

namespace Convert;
/**
 * Object conversion interface
 */
interface ITo
{
    /**
     * @date 2021-02-07
     * @return array
     */
    public function toArray(): array;

    /**
     * @date 2021-02-07
     * @return string
     */
    public function toJsonString(): string;
}

