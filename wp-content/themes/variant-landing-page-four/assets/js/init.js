//Menu Init
jQuery(function(){
    jQuery('ul.sf-menu').superfish();
});
jQuery(document).ready(function () {
    jQuery("#menu").meanmenu({
        meanMenuClose: "X<span class='screen-reader-text'>Toggle Menu</span>",
        meanMenuCloseSize: "18px",
        meanMenuOpen: "<span class='screen-reader-text'>Toggle Menu</span><span /><span /><span />",
        meanRevealPosition: "right",
        meanRevealPositionDistance: "0",
        meanRevealColour: "",
        meanRevealHoverColour: "",
        meanScreenWidth: "1030",
        meanNavPush: "",
        meanShowChildren: true,
        meanExpandableChildren: true,
        meanExpand: "+",
        meanContract: "-",
        meanRemoveAttrs: true
    });
});





