<ul>
{foreach from=$menu item=page key=id}{if $page.show=="yes"}<li class="{$id} {if $page.active}active{/if}" onclick="location.href='{$page.link}'"></li>{/if}{/foreach}
</ul>
