HN = {};

HN.init = function () {
    HN.wordpress.postMessage();
}


HN.wordpress = {};

HN.wordpress.postMessage = function () {

    var receiveFun, style;

    console.log(document.location);

    receiveFun = function (e) {

	console.log(e);

        var h = Number(e.data.replace(/.*height=(\d+)(.*$)/, '$1')),
        w = Number(e.data.replace(/.*width=(\d+)(.*$)/, '$1')),
        name = decodeURIComponent(e.data.replace(/.*name=(.+)(.*$)/, '$1')),
        recursiveFn;

	console.log(h);
	console.log(w);
	
        jQuery("#" + name).css("height", h + 1);
        jQuery("#" + name).css("width", w + 1);

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