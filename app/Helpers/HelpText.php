<?php

namespace App\Helpers;

use Auth;
use Session;
use Closure;
use Lang;

/**
 * Created by PhpStorm.
 * User: Hoangduy
 * Date: 02/08/2017
 * Time: 01:34 CH
 */
class HelpText
{
    static function stylesHome($index)
    {
        switch ($index) {
            case 1:
            case 6:
                return 'col-md-4 gal-gd wow fadeInLeft animated';
            case 2:
                return 'col-md-4 gal-gd wow fadeInUp animated';
            case 3:
            case 8:
                return 'col-md-4 gal-gd wow fadeInRight animated';
            case 4:
                return 'col-md-6 gal-gd-sec wow fadeInLeft animated';
            case 5:
                return 'col-md-6 gal-gd-sec wow fadeInRight animated';
            case 7:
                return 'col-md-4 gal-gd wow fadeInDown animated';
            default:
                return '';
        }
    }

    public static function getCurrentLanguage()
    {
        return Session::get('language', 'vn');
    }

//    public
//    static function setLanguage($lang = 'vn')
//    {
//        Session::put('language', $lang);
//    }

    public static function changeLanguage()
    {
        $language = self::getCurrentLanguage();
        switch ($language) {
            case 'en':
                $language = 'en';
                break;

            default:
                $language = 'vn';
                break;
        }

        config(['app.locale' => $language]);
    }

    public static function setLanguage($lang)
    {
        Session::put('language', $lang);
    }

    public static function changeLanguage_1($lang)
    {
        if ($lang == 'en') {
            $language = 'en';
        } else {
            $language = 'vn';
        }


        self::setLanguage($language);
    }

    public static function deleteFile($path)
    {
        if (is_file($path)) {
            unlink($path);
        }
    }
}

