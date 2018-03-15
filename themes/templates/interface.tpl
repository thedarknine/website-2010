<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <title>{$title}</title>
    <link rel="stylesheet" type="text/css" href="themes/stylesheets/theme.css" />
    {if $header}{include file=$header}{/if}
</head>
<body>
    <div id="Menu">
        <div class="Content">
            {include file='menu.tpl'}
        </div>
    </div>
    <div id="Header">
        <div class="Content">
            <img src="themes/images/caro-on-the-web.png" />
        </div>
    </div>
    <div id="Page">
        <div class="Content">
            {if $page}{include file=$page}{/if}
        </div>
    </div>
    <div id="Bottom"></div>
    <div id="Footer">
        <div class="Content">
            {include file='footer.tpl'}
        </div>
    </div>
</body>
</html>