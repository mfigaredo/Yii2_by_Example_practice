<?php
namespace app\components;

use yii\captcha\CaptchaAction;

class MathCaptchaAction extends CaptchaAction
{
    public $minLengthN = 2;
    public $maxLengthN = 100;

    /**
     * @inheritdoc
     */
    public function generateVerifyCode()
    {
        # return mt_rand(0,100);
        #die('halted!');
        return mt_rand((int)$this->minLengthN, (int)$this->maxLengthN);
    }

    /**
     * @inheritdoc
     */
    public function renderImage($code)
    {
        # return 0;
        return parent::renderImage($this->getText($code));

    }

    public function getText($code)
    {
        $code = parent::generateVerifyCode();
        return $code;
        $code = (int)$code;
        $rand = mt_rand(min(1, $code - 1), max(1, $code - 1));
        //return (string)$code;
        $operation = mt_rand(0, 1);
        if ($operation === 1) {
            return $code - $rand . '+' . $rand;
        } else {
            return $code + $rand . '-' . $rand;
        }
    }
}