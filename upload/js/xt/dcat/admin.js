! function ($, window, document, _undefined) {
    "use strict";

    XF.Element.extend("asset-upload", {
        __backup: {
            "ajaxResponse": "_afterAjaxResponseNodeImage"
        },
        ajaxResponse: function (data) {
            this._afterAjaxResponseNodeImage(data);
            if (data.path) {
                this.$path.css('background-image', 'url(' + data.path + ')');
            }
        }
    });

    XF.xtCoverImage = XF.Element.newHandler({

        oldval: null,

        init: function () {
            this.$target.css('background-image', 'url(' + this.$target.val() + ')');
            var self = this;
            this.$target.on('blur', XF.proxy(this, 'blur'))
                .on('focus', XF.proxy(this, 'focus'));;
        },

        focus: function (e) {
            this.$target.css('background-image', 'url()');
            this.oldval = this.$target.val();
        },

        blur: function (e) {
            this.$target.css('background-image', 'url(' + this.$target.val() + ')');
        }

    });

    XF.Element.register('xt-cover-image', 'XF.xtCoverImage');

}(jQuery, window, document);