<?php
$testArray = [1, 3, 45, 6, 887, 2, 5, 67, 8, 4];
#求数组中最大数所在的下标
function getMaxIndex($testArray)
{
    $maxIndex = '';
    $maxNum = $testArray[0];
    foreach ($testArray as $index => $val) {
        if ($val > $maxNum) {
            $maxNum = $val;
            $maxIndex = $index;
        }
    }
    return $maxIndex;
}
echo '数组中最大数所在的下标为：' . getMaxIndex($testArray);
echo '<br/>';
#最大数和最小数的差
function getDifference($testArray)
{
    $differenceNum = 0;
    $maxNum = $testArray[0];
    $minNum = $testArray[0];
    foreach ($testArray as $index => $val) {
        if ($val > $maxNum) {
            $maxNum = $val;
        }
        if ($minNum > $val) {
            $minNum = $val;
        }
        $differenceNum = $maxNum - $minNum;
    }
    return $differenceNum;
}
echo '最大数和最小数的差为：' . getDifference($testArray);
echo '<br/>';
#打印99乘法表
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . '*' . $i . '=' . $i * $j . '　　';
    }
    echo '<br>';
}
echo '<br/>';
#写一个方法，传入数字分数，如果分数大于 90 返回优秀， 60-90之间 合格 小于 60 不及格
$score = 10;
function getScoreOne($score)
{
    if ($score > 90) :
        return '优秀';
    elseif (60 < $score == 90) :
        return '合格';
    else :
        return '不合格';
    endif;
}
echo getScoreOne($score);
echo '<br/>';
function getScoreTwo($score)
{
    $newScore = ceil($score / 10);
    switch ($newScore) {
        case 0:
            echo "不合格";
            break;
        case 1:
            echo "不合格";
            break;
        case 2:
            echo "不合格";
            break;
        case 3:
            echo "不合格";
            break;
        case 4:
            echo "不合格";
            break;
        case 5:
            echo "不合格";
            break;
        case 6:
            echo '不合格';
            break;
        case 6:
            echo '合格';
            break;
        case 7:
            echo '合格';
            break;
        case 8:
            echo '合格';
            break;
        case 9:
            echo '合格';
            break;
        case 10:
            echo '优秀';
            break;
    }
}
echo getScoreTwo($score);
echo '<br/>';
function getScoreThree($score)
{
    while ($score > 90) {
        return '优秀';
    }
    while (60 < $score == 90) {
        return '合格';
    }
    while ($score <= 60) {
        return '不合格';
    }
}
echo getScoreThree($score);
