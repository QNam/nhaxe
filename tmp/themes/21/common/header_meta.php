<?php
                    /**
                     * @Project BNC v2 -> Template
                     * @File /data/www/superweb/fe/tmp/themes/21//common/header_meta.php
                     * @Author Quang Chau Tran (quangchauvn@gmail.com)
                     */
                    if(!defined('BNC_CODE')) {
                        exit('Access Denied');
                    }
                    ?><?=$web['ga']?>
<!--<base s_name="havanalimousine" href="<?=$web['home_url']?>" extention="<?=$web['dotExtension']?>" />-->
<base id="<?=$web['anvui_id']?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"  /> 
<title><?=$data['head']['ogsite_name']?></title>
<meta name="description" content="<?=$data['head']['description']?>">
<meta name="keywords" content="<?=$data['head']['keywords']?>">
<meta name="robots" content="INDEX, FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?=$web['static_upload']?><?=$data['head']['favicon']?>" />
<link rel="icon" href="<?=$web['static_upload']?><?=$data['head']['favicon']?>" />

<meta property="og:title" content="<?=$data['head']['ogtitle']?>"/> 
<meta property="og:image" content="<?=$data['head']['ogimage']?>"/>
<meta property="og:description" content="<?=$data['head']['ogdescription']?>"/> 
<meta property="og:site_name" content="<?=$data['head']['ogsite_name']?>"/>


 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128562266-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128562266-1');
</script>

