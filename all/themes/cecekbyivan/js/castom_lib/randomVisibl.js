/**
 * Created by bad4iz on 05.10.2016.
 */
$(document).ready(function () {

    $(function () {

        var parent = $('#shuffle');
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });




});