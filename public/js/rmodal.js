// Generated by CoffeeScript 1.7.1
/*! RModal by @watert */
;
(function() {
  var RModal;
  RModal = (function() {
    function RModal(options) {
      this.options = options;
      this.el = options.el;
      this.$el = $(this.el);
      this.initialize();
    }

    RModal.prototype.hide = function() {
      this.$el.removeClass("show");
      $("body").removeClass("rmodal-show");
      return this.$el.trigger("rmodal-hide");
    };

    RModal.prototype.show = function() {
      this.$mask.show();
      return setTimeout((function(_this) {
        return function() {
          $("body").addClass("rmodal-show");
          _this.$el.addClass("show");
          return _this.$el.trigger("rmodal-show");
        };
      })(this), 33);
    };

    RModal.prototype.toggle = function() {
      if (this.$el.hasClass("show")) {
        return this.hide();
      } else {
        return this.show();
      }
    };

    RModal.prototype.setMask = function() {
      return this.$mask = $("<div>", {
        "class": "rmodal-mask"
      }).insertBefore(this.$el).click((function(_this) {
        return function() {
          return _this.hide();
        };
      })(this)).on("webkitTransitionEnd", (function(_this) {
        return function() {
          if (!_this.$el.hasClass("show")) {
            return _this.$mask.hide();
          }
        };
      })(this));
    };

    RModal.prototype.initialize = function(options) {
      this.$el.data("rmodal", this);
      this.setMask();
      if (this.$el.hasClass("show")) {
        this.show();
      }
      return console.log("init", this.$el);
    };

    return RModal;

  })();
  return $(function() {
    var $body, checkIsShowed, isShowed;
    $(".rmodal").each(function() {
      var $el, handler;
      $el = $(this);
      return handler = new RModal({
        el: this
      });
    });
    $body = $("body");
    isShowed = false;
    checkIsShowed = function() {
      return isShowed = $body.hasClass("rmodal-show");
    };
    return $body.on("click", "[data-toggle=rmodal]", function() {
      var $btn, $target, rmodal;
      $btn = $(this);
      $target = $($btn.attr("data-target"));
      rmodal = $target.data("rmodal");
      console.log($btn, rmodal);
      return rmodal.toggle();
    });
  });
})();
