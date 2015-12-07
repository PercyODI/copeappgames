$(document).ready(function() {
    $(".card_grid").masonry({
        itemSelector: '.card',
        isFitWidth: true
    });
    
    $(".clear_search").click(function(e) {
        e.preventDefault();
        $("#search").val("");
        $("#search_submit").click();
    })
    
    $(".create_deck").click(function(e) {
        window.location = "new_deck.php";
    })
    
    $(".create_game").click(function(e) {
        window.location = "new_game.php?deckid=" + $(".create_game").attr("deckid");
    })
});