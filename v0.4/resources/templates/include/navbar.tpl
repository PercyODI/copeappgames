<div class="page_navbar">
    <div class="page_navbar_left">
        <img src="img/content/climbing_crop.jpg" id="carabiner_pic">
    COPEapp Games
    </div>
    <div class="page_navbar_right">
        <ul class='nav_ul_flex'>
            <li><a href="browse_decks.php">Browse Decks</a></li>
            {if isset($smarty.session.userid)}
            <li>|</li>
            <li><a href="browse_my_decks.php">My Decks</a></li>
            <li>|</li>
            <li>Logout</li>
            {else}
            <li>|</li>
            <li><a href="register.php">Register Now!</a></li>
            <li>|</li>
            <li><a href="index.php">Log In</a></li>
            {/if}
        </ul>
    </div>
</div>