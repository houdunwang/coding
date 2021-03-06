<?php namespace Houdunwang\WeChat\Build;

/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
class Curl
{
    protected static $code;
    protected static $result;

    /**
     * @return mixed
     */
    public static function getResult()
    {
        return self::$result;
    }

    /**
     * @param mixed $result
     */
    public static function setResult($result)
    {
        self::$result = $result;
    }

    /**
     * @return mixed
     */
    public static function getCode()
    {
        return self::$code;
    }

    /**
     * @param mixed $code
     */
    public static function setCode($code)
    {
        self::$code = $code;
    }


    /**
     * GET提交
     *
     * @param $url
     *
     * @return string
     * @throws \Exception
     */
    public static function get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        if (curl_exec($ch) === false) {
            throw new \Exception(curl_error($ch));
            $data = '';
        } else {
            $data = curl_multi_getcontent($ch);
        }
        self::setCode(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        curl_close($ch);
        self::setResult($data);

        return $data;
    }

    /**
     * POST提交
     *
     * @param       $url
     * @param array $postData
     *
     * @return string
     * @throws \Exception
     */
    public static function post($url, $postData = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        if (curl_exec($ch) === false) {
            throw new \Exception(curl_error($ch));
            $data = '';
        } else {
            $data = curl_multi_getcontent($ch);
        }
        self::setResult($data);
        self::setCode(curl_getinfo($ch, CURLINFO_HTTP_CODE));
        curl_close($ch);

        return $data;
    }
}
