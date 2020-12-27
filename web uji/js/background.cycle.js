var currentImageIndex = -1;
var imageIds = new Array();
var fadeSpeed;

var SCALING_MODE_NONE = 0;
var SCALING_MODE_STRETCH = 1;
var SCALING_MODE_COVER = 2;
var SCALING_MODE_CONTAIN = 3;

/**
 
 * @param {Object} options Options for tweaking the cycle setings.
 */
$.fn.backgroundCycle = function(options) {
    var settings = $.extend({
            imageUrls: [],
            duration: 5000,
            fadeSpeed: 1000,
            backgroundSize: SCALING_MODE_NONE
        },
        options
    );

    fadeSpeed = settings.fadeSpeed;

    var marginTop = this.css("margin-top");
    var marginRight = this.css("margin-right");
    var marginBottom = this.css("margin-bottom");
    var marginLeft = this.css("margin-left");

    if (!this.is("body")) {
        this.css({
            position: "relative"
        });
    }

    var contents = $(document.createElement("div"));

    var children = this.children().detach();
    contents.append(children);

    imageIds = new Array();

    for (var i = 0; i < settings.imageUrls.length; i++) {
        var id = "bgImage" + i;
        var src = settings.imageUrls[i];
        var cssClass = "cycle-bg-image";

        var image = $(document.createElement("div"));
        image.attr("id", id);
        image.attr("class", cssClass);

        var sizeMode;

        switch (settings.backgroundSize) {
            default: sizeMode = settings.backgroundSize;
            break;
            case SCALING_MODE_NONE:
                    sizeMode = "auto";
                break;
            case SCALING_MODE_STRETCH:
                    sizeMode = "100% 100%";
                break;
            case SCALING_MODE_COVER:
                    sizeMode = "cover";
                break;
            case SCALING_MODE_CONTAIN:
                    sizeMode = "contain";
                break;
        }

        image.css({
            "background-image": "url('" + src + "')",
            "background-repeat": "no-repeat",
            "background-position": "bottom",
            "background-size": sizeMode,
            "-moz-background-size": sizeMode,
            "-webkit-background-size": sizeMode,
            position: "fixed",
            left: marginLeft,
            top: marginTop,
            right: marginRight,
            bottom: marginBottom
        });

        this.append(image);

        imageIds.push(id);
    }

    contents.css({
        position: "absolute",
        left: marginLeft,
        top: marginTop,
        right: marginRight,
        bottom: marginBottom
    });

    this.append(contents);
    $(".cycle-bg-image").hide();
    $("#" + imageIds[0]).fadeIn();

    if (settings.duration > 0) {
        setInterval(cycleToNextImage, settings.duration);
    }

    return {
        cycleToNextImage: function(previousImageIndex, currentImageIndex) {
            if (previousImageIndex === currentImageIndex) return;

            var previousImageId = imageIds[previousImageIndex];

            if (currentImageIndex >= imageIds.length) {
                currentImageIndex = 0;
            }

            var options = {
                duration: fadeSpeed,
                queue: true
            };

            $("#" + previousImageId).fadeOut(options);
            $("#" + imageIds[currentImageIndex]).fadeIn(options);
        }
    };
};