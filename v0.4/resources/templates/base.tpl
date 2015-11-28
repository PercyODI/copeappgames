<!DOCTYPE html>
<html>
<head>
    <title>{block name=title}COPEapp{/block}</title>
    {include file='include/external_links.tpl'}
    {block name=extra_head}{/block}
</head>
<body>
    <div class="page_container">
        {include file='include/navbar.tpl'}
        {block name=content}
        <div class="page_content">
            Missing Content!
        </div>
        {/block}
        {include file='include/footer.tpl'}
    </div>
</body>
</html>