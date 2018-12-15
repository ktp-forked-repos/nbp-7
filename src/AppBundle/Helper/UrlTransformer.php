<?php
namespace AppBundle\Helper;

class UrlTransformer
{
    public function transformHistoryUrl($url, $code, $amount)
    {
        $newUrl = str_replace(array(':code', ':amount'), array($code, $amount), $url);

        return $newUrl;
    }

}
