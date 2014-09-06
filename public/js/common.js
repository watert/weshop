// Generated by CoffeeScript 1.7.1
$(function() {
  var $body;
  $body = $("body").on("click", "[data-link]", function() {
    return location.href = $(this).attr("data-link");
  }).on("click", "[data-toggle-class]", function() {
    var $dom;
    $dom = $(this);
    return $dom.toggleClass($dom.attr("data-toggle-class"));
  }).on("click", "[data-toggle-text]", function() {
    var $dom, textNow, textOrigin, textToggle;
    $dom = $(this);
    textNow = $dom.text();
    textOrigin = $dom.data("text");
    textToggle = $dom.attr("data-toggle-text");
    if (!textOrigin) {
      $dom.data("text", textNow);
    }
    if (textNow === textOrigin) {
      return $dom.text(textToggle);
    } else {
      return $dom.text(textOrigin);
    }
  });
  return $(".modal").on("show.bs.modal", function() {
    var $modal, modal;
    $modal = $(this);
    modal = $modal.data("bs.modal");
    if (modal) {
      return modal.$element.on('bsTransitionEnd', function() {
        $modal.trigger("show.end.bs.modal");
        return modal.$backdrop.click(function() {
          return modal.hide();
        });
      });
    }
  });
});