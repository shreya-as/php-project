(function ($) {
    $.fn.getOptions = function (options) {
        var that = this;
        var settings = $.extend({
            url: "",
            key: "key",
            val: "val",
            firstOption: {
                key: null,
                val: null
            }
        }, options);

        $.getJSON(settings.url, function (resp) {
            if (resp) {
                that.empty();
                if (settings.firstOption.key !== null || settings.firstOption.val !== null) {
                    that.append(new Option(settings.firstOption.key, settings.firstOption.val));
                }
                $.each(resp, function (key, val) {
                    that.append(new Option(val[settings.key], val[settings.val]));
                });
            }
        });
        return that;
    };
}(jQuery));
