<?php
namespace Tinitter\Validator;
class Post extends \Respect\Validation\Validator
{
    public static function byArray(array $params)
    {
        $error_list = [];
        // nickname ���e�X�g
        if (!static::alnum()->validate($params['nickname'])) {
            $error_list['nickname'] = '���p�̉p�������Ƌ󔒂����ɂ��Ă�����';
        }
        if (!static::length(1, 16)->validate($params['nickname'])) {
            $error_list['nickname'] = '�P?�P�U�����ȓ��ɂ��Ă�����';
        }
        // body ���e�X�g
        if (!static::length(1, 1000)->validate($params['body'])) {
            $error_list['body'] = '�P?�P�O�O�O�����ȓ��ɂ��Ă�����';
        }
        return $error_list;
    }
}