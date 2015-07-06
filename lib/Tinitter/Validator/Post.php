<?php
namespace Tinitter\Validator;
class Post extends \Respect\Validation\Validator
{
    public static function byArray(array $params)
    {
        $error_list = [];
        // nickname ‚ðƒeƒXƒg
        if (!static::alnum()->validate($params['nickname'])) {
            $error_list['nickname'] = '”¼Šp‚Ì‰p”•¶Žš‚Æ‹ó”’‚¾‚¯‚É‚µ‚Ä‚¾‚³‚¢';
        }
        if (!static::length(1, 16)->validate($params['nickname'])) {
            $error_list['nickname'] = '‚P?‚P‚U•¶ŽšˆÈ“à‚É‚µ‚Ä‚¾‚³‚¢';
        }
        // body ‚ðƒeƒXƒg
        if (!static::length(1, 1000)->validate($params['body'])) {
            $error_list['body'] = '‚P?‚P‚O‚O‚O•¶ŽšˆÈ“à‚É‚µ‚Ä‚¾‚³‚¢';
        }
        return $error_list;
    }
}