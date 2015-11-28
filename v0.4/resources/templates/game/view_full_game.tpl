{extends file='base.tpl'}
{block name=content}

<div class="page_content">
    <div class="full_game_flexbox">
        <div class="full_game_left">
            <i class="fa fa-4x fa-{$icon}"></i>
            {if $gametypes != null}
            <h3>Types</h3>
            <div class="full_game_types">
                {foreach from=$gametypes item=gametype}
                <p>{$gametype|capitalize}</p>
                {/foreach}
            </div>
            {/if}
            {if $gametags != null}
            <h3>Tags</h3>
            <div class="full_game_tags">
                {foreach from=$gametags item=gametag}
                    <p>{$gametag|capitalize}</p>
                {/foreach}
            </div>
            {/if}
            {if $equipment != null}
            <h3>Equipment</h3>
            <div class="full_game_equipment">
                {foreach from=$equipment item=item}
                    <p>{$item}</p>
                {/foreach}
            </div>
            {/if}
        </div>
        <div class="full_game_right">
            <div class="content_title">
                <h2>{$title}</h2>
                <p>From Deck: <a href="view_deck.php?deckid={$deckid}">{$deckname}</a></p>
            </div>
            <hr>
            <h3>Description</h3>
            <div class="full_game_description">
                {$description}
            </div>
            <hr>
            <h3>Instructions</h3>
            <div class="full_game_instruction">
                {$instructions}
            </div>
            <hr>
            <h3>Discussion</h3>
            <div class="full_game_discussion">
                {$discussion}
            </div>
        </div>

    </div>
    <div class="full_game_vidpics">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#pictures" aria-controls="pictures" role="tab" data-toggle="tab">Pictures</a></li>
            <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>
        </ul>

        <div class="tab-content full_game_vidpics_content">
            <div class="full_game_pictures tab-pane active" role="tabpanel" id="pictures">
                {if $gamepictures != null}
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        {foreach from=$gamepictures item=link name=piceach1}
                        <li data-target="#carousel-example-generic" data-slide-to="{$smarty.foreach.piceach1.index}"{if $smarty.foreach.piceach1.first} class="active"{/if}></li>
                        {/foreach}
                    </ol>

                    <!-- Wrapper for slides -->
                    
                    <div class="carousel-inner" role="listbox">
                        {foreach from=$gamepictures item=link name=piceach2}
                        <div class="item{if $smarty.foreach.piceach2.first} active{/if}">
                            <img src="{$link}" alt="{$title} Picture">
                        </div>
                        {/foreach}
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                {else}
                <h3>No Pictures Found!</h3>
                {/if}
            </div>
            <div class="full_game_videos tab-pane" role="tabpanel" id="videos">
                {if $gamevideos != null}
                <video controls>
                    <source src="{$gamevideos[0]}">
                </video>
                {else}
                <h3>No Videos Found!</h3>
                {/if}
            </div>
        </div>
    </div>
</div>

{/block}