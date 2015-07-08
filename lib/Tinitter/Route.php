<?php
namespace Tinitter;
class Route
{
    public static function registration(\Slim\Slim $app)
    {
        // Slim縺ｮCSRF蟇ｾ遲悶��繝ｩ繧ｰ繧､繝ｳ繧呈怏蜉ｹ蛹�
        $app->add(new \Slim\Extras\Middleware\CsrfGuard());
        // 繝医ャ繝励��繝ｼ繧ｸ
        $app->get('/', '\Tinitter\Controller\TimeLine:show');
        // 謚慕ｨｿ荳�隕ｧ
        $app->get('/page/:page_num', '\Tinitter\Controller\TimeLine:show');
        // 譁ｰ隕乗兜遞ｿ邉ｻ縲∽ｿ晏ｭ�
        $app->post('/post/commit', '\Tinitter\Controller\Post:commit');
    }
}
