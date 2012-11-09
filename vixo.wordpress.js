HN = {};

HN.init = function () {
    HN.wordpress.postMessage();
}


HN.wordpress = {};

HN.wordpress.postMessage = function () {

    var receiveFun, height, width, style;

    console.log(document.location);

    receiveFun = function (e) {

        var h = Number(e.data.replace(/.*height=(\d+)(.*$)/, '$1')),
        w = Number(e.data.replace(/.*width=(\d+)(.*$)/, '$1')),
        recursiveFn;

        if (h !== height) {
            jQuery(".hn_wordpress").css("height", h + 1);
            height = h;
        }
        if (w !== width) {
            jQuery(".hn_wordpress").css("width", w + 1);
            width = w;
        }

        recursiveFn = function () {
            jQuery.receiveMessage(receiveFun);
        };

        setTimeout(recursiveFn, 1, "");
    };

    // show the iframe
    jQuery(".hn_wordpress").css("display", "block");

    jQuery.receiveMessage(receiveFun);
};


// Now execute the fns
jQuery(document).ready(function () {
    HN.init();
});