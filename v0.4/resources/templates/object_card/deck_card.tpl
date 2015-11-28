<div class="card deck-card">
    <div class="deck-icon">
        <i class="fa fa-4x fa-{$icon}"></i>
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
            <li><a href="#">Copy Deck</a></li>
        </ul>
    </div>
</div>