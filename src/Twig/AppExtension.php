<?php
/**
 * Created by PhpStorm.
 * User: mstandeven
 * Date: 7/27/2018
 * Time: 10:05 AM
 */

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{

    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'priceFilter'])
        ];
    }

    public function priceFilter($number)
    {
        return '$'.number_format($number, 2, '.', ',');
    }
}