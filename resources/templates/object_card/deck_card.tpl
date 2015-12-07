<div class="card deck-card">
    <div class="deck-icon">
        <i class="fa fa-4x {$icon}"></i>
    </div>
    <div class="deck-title">
        {$name|escape:htmlall}
    </div>
    <div class="deck-description">
        {$description|truncate:256}
    </div>
    <div class="deck_dropdown dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Deck Action
            <i class="fa fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a href="view_deck.php?deckid={$deckid}">View Deck</a></li>
            {if $userid == $smarty.session.userid}
            <li><a href="edit_deck.php?deckid={$deckid}">Edit Deck</a></li>
            {/if}
            <li><a href="browse_decks.php?userid={$userid}">Browse {$usercopename|capitalize}'s Decks</a></li>
        </ul>
    </div>
</div>