{extends file='layout.tpl'}
{block name=content}
<div class="page_content">
    <div class="content_title">
        <h2>Viewing {$deckname}</h2>
        <h3>Created By {$usercopename}</h3>
    </div>
    <div class="card_grid">
    {foreach from=$games item=$game}
        {$game->smartyCard('object_card/game_card.tpl')}
    {foreachelse}
        <div class="card"><h3>No Games have been added to this Deck!</h3></div>
    {/foreach}
    </div>
</div> <!-- /page_content -->
{/block}