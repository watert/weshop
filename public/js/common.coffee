
$ ->
	FastClick.attach(document.body)
	$body = $("body")
		.on "touchstart", (e)->
			return
		.on "click touchend","[data-link]",->
			location.href = $(this).attr("data-link")
		.on "click touchend","[data-toggle-class]",->
			$dom = $(this)
			$dom.toggleClass($dom.attr("data-toggle-class"))
		.on "click","[data-toggle-text]",->
			$dom = $(this)
			textNow = $dom.text()
			textOrigin = $dom.data("text")
			textToggle = $dom.attr("data-toggle-text")
			if !textOrigin then $dom.data("text",textNow)
			if textNow is textOrigin
				$dom.text(textToggle)
			else $dom.text(textOrigin)
	$(".modal").on "show.bs.modal", ->
		$modal = $(this)
		modal = $modal.data("bs.modal")
		if modal then modal.$element.on 'bsTransitionEnd',->
			$modal.trigger("show.end.bs.modal")
			modal.$backdrop.click -> modal.hide()

	# Pages
	# $("#modal-channels").on "show.bs.modal",->
	# 	$(".channel-item .img",this).each ->
	# 		$img = $(this)
	# 		console.log "setimg",$img,$img.width()
	# 		$img.height($img.width())
	# $("#modal-channels .channel-item .img").each ->

			# $target.toggleClass("show")
			# $body.toggleClass("rmodal-show")
	# $body
	# 	.on "click",".rmodal-mask",->

	# 	.on "click","[data-toggle=rmodal]", ->
	# 		$btn = $(this)
	# 		$target = $($btn.attr("data-target"))
	# 		$target.toggleClass("show")
	# 		$body.toggleClass("rmodal-show")