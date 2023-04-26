$('.open_menu_sidebar').on('click', function(){
	$('.menu').css('left', 0);
});

$(document).mouseup(function(e) 
{
    var container = $(".menu");
    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.css('left', '-320px');
    }
});