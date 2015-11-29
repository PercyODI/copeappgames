{extends file='base.tpl'}
{block name=content}
<div class="page_content">
    <div class="content_title">
        <h2>Browse Decks</h2>
    </div>
    <div class="content_search form-inline">
        <div class="form-group">
            <input type="text" class="form-control">
            <button type="button" class="btn btn-primary">Search</button>
        </div> <!-- /form-group -->
    </div> <!-- /content_search -->
    <div class="card_grid">
    {foreach from=$decks item=deck}
        {$deck->smartyCard('object_card/deck_card.tpl')}
    {/foreach}
    </div>
</div> <!-- /page_content -->
{/block}