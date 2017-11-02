<?php 

namespace app\components;

use yii\web\UrlRuleInterface;
use yii\base\Object;

class TestUrlRule extends Object implements UrlRuleInterface
{

    public function createUrl($manager, $route, $params)
    {
        if ($route === 'test-rules/item-detail') {
            if (isset($params['title'])) {
                return 'test-rules/'.$params['title'];
            }
        }
        return false;  // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        
         if (preg_match('%^([^\/]*)\/([^\/]*)$%', $pathInfo, $matches)) {
            if($matches[1] == 'test-rules')
            {
                $params = [ 'title' => $matches[2]];
                return ['test-rules/item-detail', $params];
            }
            else
            {
                return false;
            }
        }
        return false;  // this rule does not apply
    }
}