<?php
namespace Tinitter\Validator;
class Post extends \Respect\Validation\Validator
{
    static function byArray(array $params)
    {
        $error_list = [];
        
        // nickname をテスト
        if (!static::alnum()->validate($params['nickname'])) {
            $error_list['nickname'] = '半角の英数文字と空白だけにしてださい';
        }
        if (!static::length(1, 16)->validate($params['nickname'])) {
            $error_list['nickname'] = '1〜16文字以内にしてださい';
        }
        
        // body をテスト
        if (!static::length(1, 1000)->validate($params['body'])) {
            $error_list['body'] = '1〜1000文字以内にしてださい';
        }
        return $error_list;
    }
}