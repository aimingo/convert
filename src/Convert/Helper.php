<?php

namespace Convert;
/**
 * @date 2021-02-07
 * Class Helper
 * @package Convert
 */
class Helper
{

    /**
     * @date 2021-02-08
     * @param $data
     * @param string $dstClassName
     * @return mixed
     * @throws \Exception
     */
    public static function toObject($data, string $dstClassName)
    {
        if (!class_exists($dstClassName, true)) {
            throw new \Exception(printf('Convert2Object dstClassName %d is not exists', $dstClassName));
        }

        if (!is_array($data) && !is_object($data)) {
            throw new \Exception(printf('Convert2Object Argument 1 must be of the type array or object, %s given', gettype($data)));
        }

        if ($data instanceof $dstClassName) {
            return $data;
        }

        if (is_array($data)) {
            $data = (object)$data;
        }

        $str = serialize($data);
        $str = sprintf('O:%d:"%s%s',
            strlen($dstClassName),
            $dstClassName,
            substr($str, strpos($str, get_class($data)) + strlen(get_class($data)))
        );

        $obj = unserialize($str, ['allowed_classes' => [$dstClassName]]);
        if (!($obj instanceof $dstClassName)) {
            throw new \Exception(sprintf('Convert2Object  type %s to %s fail. result type %s', gettype($data), $dstClassName, gettype($obj)));
        }

        return $obj;
    }

    /**
     * @date 2021-02-08
     * @param $obj
     * @return array
     */
    public static function toArray($obj): array
    {
        if (is_array($obj)) return $obj;
        return (array)$obj;
    }
}

