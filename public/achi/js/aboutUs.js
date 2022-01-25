"use strict";

function switcher(x) {
    if (x.matches) {
        $(".mobile-bottom").insertAfter(".mobile-top");
    } else {
        $(".mobile-top").insertAfter(".mobile-bottom");
    }
}

const windowSize = window.matchMedia("(max-width: 960px)");

switcher(windowSize);

windowSize.addListener(switcher);
