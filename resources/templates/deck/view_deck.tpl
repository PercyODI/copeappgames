{extends file='base.tpl'}
{block name=content}
<div class="page_content">
    <div class="content_title">
        <h2>Viewing {$deckname}</h2>
        <h3>Created By <a href="browse_decks.php?userid={$userid}">{$usercopename}</a></h3>
        {if $userid == $smarty.session.userid}
        [<a href="edit_deck.php?deckid={$smarty.get.deckid}">Edit</a>]
        {/if}
    </div>
    <div class="card_grid">
        {if $userid == $smarty.session.userid}
        <div class="card game-card create_game" deckid={$smarty.get.deckid}>
            <div class="game-title">
                Create a New Game
            </div>
            <div class="game-icon">
                <i class="fa fa-4x fa-plus-square"></i>
            </div>
            <div class="game-description">
                Click this card to Create a New Deck!
            </div>
        </div>
        {/if}
    {foreach from=$games item=game}
        {$game->smartyCard('object_card/game_card.tpl')}
    {foreachelse}
        <div class="card"><h3>No Games have been added to this Deck!</h3></div>
    {/foreach}
    </div>
</div> <!-- /page_content -->
{/block}