var isOpen = false;

function toggle_hide(){
    $("#sidepanel").toggleClass("sidepanel-in");
    $(".header > *").not(".header > #sidepanel").toggleClass("blur");
    isOpen = (isOpen == true) ? false : true;
}

$(".openbtn").click(function(){toggle_hide();});
$(".closebtn").click(function(){toggle_hide();});


$(document).mouseup(function(e){
    var container = $("#sidepanel");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        if(isOpen == true){
            toggle_hide();
        }
    }
});