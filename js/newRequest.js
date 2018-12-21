//Drawer Code
let drawerAnimationTime = 200;
const openDrawer = () => {
    $(".drawer, .notDrawer").css({
        display: 'inline-block',
    })

    $(".notDrawer").animate({
        backgroundColor: 'rgba(0, 0, 0, 0.6)',
    }, drawerAnimationTime / 2);

    $(".drawer").animate({
        marginLeft: '0px',
    }, drawerAnimationTime, "easeInOutCirc");
}
const closeDrawer = () => {
    $(".notDrawer").animate({
        backgroundColor: 'rgba(0, 0, 0, 0)',
    }, drawerAnimationTime / 2);

    $(".drawer").animate({
        marginLeft: $(".drawer").width() * -1,
    }, drawerAnimationTime, "easeInOutCirc");

    setTimeout(() => {
        $(".drawer, .notDrawer").css({
            display: 'none',
        });
    }, drawerAnimationTime)
}

$(".drawerIcon").click(closeDrawer);
$(".notDrawer").click(closeDrawer);
$(".navIcon").click(openDrawer);

//Search Code
$($(".searchIcon")[0]).click(function(e){
    if($(window).width() <= 1000){
        e.preventDefault();
        $(".searchForPhones").slideToggle(150);
    }
})