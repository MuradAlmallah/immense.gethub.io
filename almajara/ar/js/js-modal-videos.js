"use strict";

function ModalVideoOptions(callbackOnModalOpenClick) {
    if (this instanceof ModalVideoOptions) {
        this.callbackOnModalOpenClick = callbackOnModalOpenClick;
        this._videoType = undefined;
        if (Object.freeze)
            Object.freeze(this.VideoEnum)
    } else {
        return new ModalVideoOptions(callbackOnModalOpenClick)
    }
}
ModalVideoOptions.prototype = {
    constructor: ModalVideoOptions,
    getVideoType: function () {
        return this._videoType
    },
    setVideoType: function (value) {
        if (typeof value != "number") {
            throw new Error('Invalid argument: value. This argument must be a number.')
        }
        var videoTypeItem;
        for (videoTypeItem in this.VideoEnum) {
            var enumValue = this.VideoEnum[videoTypeItem];
            if (value == enumValue) {
                this._videoType = enumValue
            }
        }
        if (this._videoType == undefined)
            throw new Error('Invalid argument: value. This argument must be in the range of VideoEnum.')
    },
    VideoEnum: {
        MP4: 0,
        YOUTUBE: 1,
        other: 2
    }
};

function ytVidId(url) {
    var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    return (url.match(p)) ? RegExp.$1 : !1
}
(function ($) {
    function showModal(options) {
        if ($('#mask').length == 0) {
            $('body').prepend("<div id='mask' class='modal-backdrop fade in'></div>")
        }
        var dialogContainer = $('#dialog-container-video');
        if (dialogContainer.length == 0) {
            var dialogContainer = $("<div id='dialog-container-video' class='modal fade in modal-dialog-custom'></div>");
            $('body').prepend(dialogContainer)
        }
        var dialogContent;
        console.log(options.getVideoType());
        if (options.getVideoType() == options.VideoEnum.MP4) {
            dialogContent = "<div id='dialog-content' class='modal-body modal-dialoge-dup'><div class='closer-new'><img src='https://www.chetu.com/img/news/close_blue.png'></div><video width='100%' src='" + options.link + "' controls autoplay></video><p></p></div>"
        } else if (options.getVideoType() == options.VideoEnum.YOUTUBE) {
            dialogContent = "<div id='dialog-content' class='modal-body modal-body-video modal-dialoge-dup'><div class='closer-new'><img src='https://www.chetu.com/img/news/close_blue.png'></div><iframe src='https://www.youtube.com/embed/" + options.youtubeId + "' frameborder='0' allowfullscreen autoplay></iframe></video><p></p></div>"
        } else if (options.getVideoType() == options.VideoEnum.other) {
            dialogContent = "<div id='dialog-content' class='modal-body modal-dialoge-dup'><div class='closer-new'><img src='https://www.chetu.com/img/news/close_blue.png'></div><iframe width='100%' height='100%' frameborder='0' allowfullscreen src='" + options.link + "'></iframe><p></p></div>"
        }
        if (dialogContent) {
            dialogContainer.append(dialogContent)
        }
        $('#mask').show();
        $("#dialog-container-video").show();
        $('body').css('overflow', 'hidden');
        var closePopup = function () {
            $('.closer-new').hide();
            $('.modal-backdrop').hide();
            $('#dialog-container-video').hide();
            $(".closer-new").unbind("click", closePopup);
            $('#dialog-container-video a.close').unbind("click", closePopup);
            $(document).unbind("keyup", escKeyClosePopup);
            $('#dialog-content').remove();
            $('body').css('overflow', 'auto')
        };
        $('.closer-new').on("click", closePopup);
        $('#dialog-container-video a.close').on("click", closePopup);
        var escKeyClosePopup = function (e) {
            if (e.keyCode == 27) {
                closePopup()
            }
        };
        $(document).keyup(escKeyClosePopup)
    }
    $.fn.modalvideo = function (options) {
        if ((options instanceof ModalVideoOptions) == !1) {
            throw new Error('Invalid argument: options. This argument must be an instance of ModalVideoOptions.')
        }
        if (!options || $.isEmptyObject(options)) {
            options = new ModalVideoOptions()
        }
        $(this).each(function (i) {
            var link = $(this).prop("href") === undefined ? this.getAttribute('data-href'):$(this).prop("href");
            if (typeof link == "undefined") {
                return !0
            }
            var youtubeId = ytVidId(link);
            if (youtubeId != !1) {
                options.setVideoType(options.VideoEnum.YOUTUBE);
                options.youtubeId = youtubeId
            } else if (link.indexOf('.mp4', link.length - '.mp4'.length) != -1) {
                options.setVideoType(options.VideoEnum.MP4)
            } else if (link.indexOf('.mp4', link.length - '.mp4'.length) == -1 || youtubeId == !1) {
                options.setVideoType(options.VideoEnum.other)
            } else return !0;
            options.link = typeof options.link == "undefined" ? link : options.link;
            $(this).click(function (e) {
                e.preventDefault();
                showModal(options);
                if (typeof options.callbackOnModalOpenClick == "function") {
                    options.callbackOnModalOpenClick()
                }
            })
        })
    }
})(jQuery)