<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php require_once 'functions.php'; ?>
<!DOCTYPE HTML>
<?php
require_once 'config.php';
if ($GLOBALS['style_BG'] != '') {
    echo '<style>';
    echo "\n";
    echo 'body{ background: #fff; } body::before{ background: url(' . $GLOBALS['style_BG'] . ') center/cover no-repeat; } blockquote::before{ background: transparent !important; }';
    echo "\n";
    echo '</style>';
    echo "\n";
}
?>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('%s'),
                'tag'       =>  _t('%s'),
                'author'    =>  _t('%s')
            ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- Open graph-->
    <meta property="og:site_name" content="<?php $this->options->title() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <meta property="og:title" content="<?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('%s'),
                'tag'       =>  _t('%s'),
                'author'    =>  _t('%s')
            ), '', ' - '); ?><?php $this->options->title(); ?>" />
    <meta property="og:description" content="<?php $this->description(); ?>" />
    <meta property="og:image" content="<?php echo getPostFirstImg($this->cid); ?>" />
    <meta property="og:category" content="<?php $this->category(',', false); ?>" />
    <meta property="article:author" content="<?php $this->author(); ?>" />
    <meta property="article:publisher" content="<?php $this->options->siteUrl(); ?>" />
    <meta property="article:published_time" content="<?php $this->date('c'); ?>" />
    <meta property="article:published_first" content="<?php $this->options->title() ?>, <?php $this->permalink() ?>" />
    <meta property="article:tag" content="<?php $this->keywords(',');?>" />
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kevinishd">
    <meta name="twitter:title" content="<?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('%s'),
                'tag'       =>  _t('%s'),
                'author'    =>  _t('%s')
            ), '', ' - '); ?><?php $this->options->title(); ?>">
    <meta name="twitter:description" content="<?php $this->description(); ?>">
    <meta name="twitter:image" content="<?php echo getPostFirstImg($this->cid); ?>">
    
    <!-- QQ-->
    <meta itemprop="name" content="<?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('%s'),
                'tag'       =>  _t('%s'),
                'author'    =>  _t('%s')
            ), '', ' - '); ?><?php $this->options->title(); ?>"/>
    <meta itemprop="image" content="<?php echo getPostFirstImg($this->cid); ?>" />
    <meta name="description" itemprop="description" content="<?php $this->description(); ?>" />

    <!-- WeChat Sharing -->
    <script>
     var WECHAT_TITLE = '<?php $this->archiveTitle(array(
                'category'  =>  _t('%s'),
                'search'    =>  _t('%s'),
                'tag'       =>  _t('%s'),
                'author'    =>  _t('%s')
            ), '', ' - '); ?><?php $this->options->title(); ?>';
     var WECHAT_DESC = '<?php $this->description(); ?>';
     var WECHAT_IMAGE = '<?php echo getPostFirstImg($this->cid); ?>';
     var WCHAT_NO_GA = '';
    </script>


    <!-- 使用url函数转换相关路径 -->
    <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('assert/css/bootstrap.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('assert/css/prism.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('assert/css/zoom.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('assert/css/main.css'); ?>">
    <?php if ($GLOBALS['isIconNav'] == 'on') : ?>
        <link type="text/css" rel="stylesheet" href="<?php $this->options->themeUrl('assert/css/twemoji-awesome.css'); ?>">
    <?php endif; ?>

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

    <header id="header" class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="logo">
                    <div class="header-logo">
                        <!-- 标题开始 -->
                        <span class="b">洛</span>
                        <span class="b">雪</span>
                        <a href="<?php $this->options->siteUrl(); ?>">
                            <span class="の">M</span>
                        </a>
                        <span class="b">C</span>
                        <span class="b">a</span>
                        <span class="b">t</span>
                        <!-- 标题结束 -->
                        <a id="btn-menu" href="javascript:isMenu();">
                            <span class="b">·</span>
                        </a>
                        <a href="javascript:isMenu1();">
                            <?php if ($GLOBALS['isIconNav'] == 'on') : ?>
                                <span id="menu-1" class="bf"><i class="twa twa-flags"></i></span>
                            <?php else : ?>
                                <span id="menu-1" class="bf">1</span>
                            <?php endif; ?>
                        </a>
                        <a href="javascript:isMenu2();">
                            <?php if ($GLOBALS['isIconNav'] == 'on') : ?>
                                <span id="menu-2" class="bf"><i class="twa twa-evergreen-tree"></i></span>
                            <?php else : ?>
                                <span id="menu-2" class="bf">2</span>
                            <?php endif; ?>
                        </a>
                        <a href="javascript:isMenu3();">
                            <?php if ($GLOBALS['isIconNav'] == 'on') : ?>
                                <span id="menu-3" class="bf"><i class="twa twa-mag"></i></span>
                            <?php else : ?>
                                <span id="menu-3" class="bf">3</span>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div id="menu-page">
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while ($pages->next()) : ?>
                            <a href="<?php $pages->permalink(); ?>">
                                <li><?php $pages->title(); ?></li>
                            </a>
                        <?php endwhile; ?>
                        <?php if ($GLOBALS['isRSS'] == 'on') : ?>
                            <a href="<?php $this->options->feedUrl(); ?>">
                                <li>RSS</li>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div id="search-box">
                        <form id="search" method="post" action="./" role="search">
                            <input autocomplete="off" type="text" name="s" id="menu-search" placeholder="Type something~" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="body" class="clearfix">
