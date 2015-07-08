<?php
namespace Tinitter\Validator;
class Post extends \Respect\Validation\Validator
{
    static function byArray(array $params)
    {
        $error_list = [];
        
        // nickname ‚ğƒeƒXƒg
        if (!static::alnum()->validate($params['nickname'])) {
            $error_list['nickname'] = '”¼Šp‚Ì‰p”•¶š‚Æ‹ó”’‚¾‚¯‚É‚µ‚Ä‚¾‚³‚¢';
        }
        if (!static::length(1, 16)->validate($params['nickname'])) {
            $error_list['nickname'] = '1`16•¶šˆÈ“à‚É‚µ‚Ä‚¾‚³‚¢';
        }
        
        // body ‚ğƒeƒXƒg
        if (!static::length(1, 1000)->validate($params['body'])) {
            $error_list['body'] = '1`1000•¶šˆÈ“à‚É‚µ‚Ä‚¾‚³‚¢';
        }
        return $error_list;
    }
}