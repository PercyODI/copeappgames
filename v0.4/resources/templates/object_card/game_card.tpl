<div class="card game-card">
    <div class="game-icon">
        <i class="fa fa-4x fa-{$icon}"></i>
    </div>
    <div class="game-title">
        {$title}
    </div>
    <div class="game-description">
        {$description}
    </div>
    <div class="game_dropdown dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
            Action
            <i class="fa fa-caret-down"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a href="view_game?gameid={$gameid}">View Game</a></li>
            <li><a href="#">Copy Game</a></li>
        </ul>
    </div>
</div>