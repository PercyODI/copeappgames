<div class="page_footer">
    <ul class="footer_breadcrumbs">
        <!--<li>Home></li>-->
        <!--<li>Browse Decks</li>-->
    </ul>
    {if isset($smarty.session.userid)}
    <p>You Are {assign var=copename value=User::getCopenameFromId($smarty.session.userid)}{$copename}</p>
    {/if}
</div>