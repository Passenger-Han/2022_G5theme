<?php
include_once('./_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5['title'] = 'Company';

include_once(G5_THEME_PATH.'/head.php');
?>

<img src="<? G5_THEME_IMG_URL ?>/img1.jpg" alt="">

<ul class="slide">
    <li><img src="<? echo G5_THEME_IMG_URL ?>/bg01.jpg" alt=""></li>
    <li><img src="<? echo G5_THEME_IMG_URL ?>/bg02.jpg" alt=""></li>
</ul>
<script>
	$(".slide").bxSlider({
        pager: false,
        controls: false,
        auto: true,
        pause: 6000,
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');