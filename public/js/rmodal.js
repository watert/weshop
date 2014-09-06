// Generated by CoffeeScript 1.7.1
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
    this.$el.addClass("show");
    $("body").addClass("rmodal-show");
    return this.$el.trigger("rmodal-show");
  };

  RModal.prototype.toggle = function() {
    if (this.$el.hasClass("show")) {
      return this.hide();
    } else {
      return this.show();
    }
  };

  RModal.prototype.initialize = function(options) {
    this.$el.data("rmodal", this);
    if (this.$el.hasClass("show")) {
      this.show();
    }
    console.log("init", this.$el);
    return this.$el.on("click", ".rmodal-mask", (function(_this) {
      return function() {
        console.log("mask click");
        return _this.hide();
      };
    })(this));
  };

  return RModal;

})();

$(".rmodal").each(function() {
  var $el, handler;
  $el = $(this);
  return handler = new RModal({
    el: this
  });
});

console.log($("body"));

$(function() {
  return $("body").on("click", "[data-toggle=rmodal]", function() {
    var $btn, $target, rmodal;
    $btn = $(this);
    $target = $($btn.attr("data-target"));
    rmodal = $target.data("rmodal");
    console.log($btn, rmodal);
    return rmodal.toggle();
  });
});
