<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");

// 解析文章：暂只是添加 h3,h4 锚点，为 <img> 添加 data-action
function parseContent($content)
{
    // 添加 h3,h4 锚点
    $ftitle = array();
    preg_match_all('/<h([3-4])>(.*?)<\/h[3-4]>/', $content, $title);
    $num = count($title[0]);

    for ($i = 0; $i < $num; $i++) {
        $f = $title[2][$i];
        $type = $title[1][$i];
        if ($type == '3') {
            $ff = '<h3 id="anchor-' . $i . '" class="torAn">' . $f . '</h3>';
        }
        if ($type == '4') {
            $ff = '<h4 id="anchor-' . $i . '" class="torAn">' . $f . '</h4>';
        }
        array_push($ftitle, $ff);
    }
    for ($i = 0; $i < $num; $i++) {
        $content = str_replace_limit($title[0][$i], $ftitle[$i], $content);
    }

    // <img> 添加 data-action
    $fimg = array();
    preg_match_all('/<img (.*?)>/', $content, $img);
    $num = count($img[0]);

    for ($i = 0; $i < $num; $i++) {
        $f = $img[1][$i];
        $ff = '<img data-action="zoom" ' . $f . '>';

        array_push($fimg, $ff);
    }
    for ($i = 0; $i < $num; $i++) {
        $content = str_replace_limit($img[0][$i], $fimg[$i], $content);
    }

    print_r($content);
}

function str_replace_limit($search, $replace, $subject, $limit = 1)
{
    if (is_array($search)) {
        foreach ($search as $k => $v) {
            $search[$k] = '`' . preg_quote($search[$k], '`') . '`';
        }
    } else {
        $search = '`' . preg_quote($search, '`') . '`';
    }

    return preg_replace($search, $replace, $subject, $limit);
}

function post_tor($content)
{
    $f = '';
    preg_match_all('/<h[3-4]>(.*?)<\/h[3-4]>/', $content, $tor_i);
    $num = count($tor_i[0]);

    if ($num == 0) {
        return '';
    } else {
        for ($i = 0; $i < $num; $i++) {
            $a = '<a id="tor-' . $i . '" class="torList" href="#anchor-' . $i . '">' . $tor_i[0][$i] . '</a>';
            $f = $f . $a;
        }
        $f = str_replace('<h3>', '<span class="tori">', $f);
        $f = str_replace('</h3>', '</span><br>', $f);
        $f = str_replace('<h4>', '<span class="torii">', $f);
        $f = str_replace('</h4>', '</span><br>', $f);

        return '<a href="#main">Title</a><br>' . $f . '<a href="javascript:goToComment();">Comment</a>';
    }
}

function post_config($thiss)
{
    $content = $thiss->content;
    $rst = ['isTorTree' => (($GLOBALS['isTorTree'] == 'on') ? 1 : 0)];
    preg_match_all('/<!-- isTorTree:(.*?); -->/', $content, $isTor);

    if (@$thiss->fields->tor == 'on' || $isTor[1][0] == 'on') {
        $rst['isTorTree'] = 1;
    } else if (@$thiss->fields->tor == 'off' || $isTor[1][0] == 'off') {
        $rst['isTorTree'] = 0;
    }

    return $rst;
}

//获取文章首图的 method，返回的是图片的 direct link
function getPostFirstImg($cid) {
    $db = Typecho_Db:: get();
    $rs = $db -> fetchRow($db -> select('table.contents.text')
        -> from('table.contents')
        -> where('table.contents.cid=?', $cid)
        -> order('table.contents.cid', Typecho_Db:: SORT_ASC)
        -> limit(1));
    $imgUrl = [];
    $num = preg_match_all("/http(.*?)(.jpg|.png)/", $rs['text'], $imgUrl);
    if ($num == 0) {
        // 这是我博客的站点 logo 图片 direct link
        return 'https://pic1.imgdb.cn/item/62a0287d0947543129ca2b11.jpg';
    } else {
        return $imgUrl[0][0];
    }
}
