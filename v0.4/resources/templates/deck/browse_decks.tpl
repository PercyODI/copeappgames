{extends file='base.tpl'}
{block name=content}
<div class="page_content">
    <div class="content_title">
        <h2>
        {if $smarty.get.search}
        Searching
        {else}
        Browsing
        {/if}
        
        {if $smarty.get.userid == $smarty.session.userid}
        My Decks
        {elseif $smarty.get.userid != 'any'}
        {$copename|capitalize|default:'No  Username'}'s Decks
        {else}
        All Decks
        {/if}
        </h2>
    </div>
    <div class="content_search form-inline">
        <form class="form-group" action="browse_decks.php" method="GET">
            <input type="text" name="search" id="search" class="form-control"{if $smarty.get.search != null}value="{$smarty.get.search}"{/if}>
            {if $smarty.get.userid}
            <input type="hidden" name="userid" value="{$smarty.get.userid|default:''}">
            {/if}
            <button type="submit" id="search_submit" class="btn btn-primary">Search</button>
            {if $smarty.get.search}
            <button class="clear_search btn btn-default" type="button">Clear Search</button>
            {/if}
        </form> <!-- /form-group -->
    </div> <!-- /content_search -->
    <div class="card_grid">
        {if $smarty.get.userid == $smarty.session.userid}
        <div class="card deck-card create_deck">
            <div class="deck-title">
                Create a New Deck
            </div>
            <div class="deck-icon">
                <i class="fa fa-4x fa-plus-square"></i>
            </div>
            <div class="deck-description">
                Click this card to Create a New Deck!
            </div>
        </div>
        {/if}
    {foreach from=$decks item=deck}
        {$deck->smartyCard('object_card/deck_card.tpl')}
    {/foreach}
    </div>
</div> <!-- /page_content -->
{/block}