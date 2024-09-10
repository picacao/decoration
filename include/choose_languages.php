<?php
// $collections = get_collections();
// echo $collections['dog_col'];
function choose_languages() {
    $currentlang = get_bloginfo('language');
    if($currentlang == "en-US"){
        include 'languages/english.php';
    } elseif($currentlang == "zh-HK"){
        include 'languages/hongkong.php';
    }
    return array(
        'banner_title'=>$banner_title,
        'banner_short'=>$banner_short,
        'banner_button'=>$banner_button,
        'link_button'=>$link_button,
        'our_products'=>$our_products,
        'quote_author_1'=>$quote_author_1,
        'quote_content_1'=>$quote_content_1,
        'quote_author_2'=>$quote_author_2,
        'quote_content_2'=>$quote_content_2,
        'quote_author_3'=>$quote_author_3,
        'quote_content_3'=>$quote_content_3,
        'our_articles'=>$our_articles,
    );
}
?>