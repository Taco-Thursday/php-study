<?php
$radius = 10;
final class circle {
    const PI = 3.14;
    static function perimeter($radius){
        return $radius * 2 * self::PI;
    }

    static function area($radius){
        return $radius * $radius * self::PI;
    }
}

$Circle = new circle();
echo '圆的周长为：'.$Circle->perimeter($radius);
echo '<br>';
echo '圆的面积为：'.$Circle->area($radius);