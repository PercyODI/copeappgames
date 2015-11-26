<h1>{$title}</h1>
<p>{$icon}</p>
<p>{$description}</p>
<ul>
{foreach from=$gamepictures item=$item}
    <li>{$item}</li>
{/foreach}
</ul>