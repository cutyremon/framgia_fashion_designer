<?php

namespace App\Helpers;

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
}

