`/*! RModal by @watert */
`
do ->
	class RModal
		constructor:(options)->
			@options = options
			@el = options.el
			@$el = $(@el)
			@initialize()
		hide:()->
			@$el.removeClass("show")
			$("body").removeClass("rmodal-show")
			@$el.trigger("rmodal-hide")
		show:()->
			@$el.addClass("show")
			$("body").addClass("rmodal-show")
			@$el.trigger("rmodal-show")
		toggle:()->
			if @$el.hasClass("show") then @hide()
			else @show()
		initialize:(options)->
			@$el.data("rmodal",this)
			if @$el.hasClass("show") then @show()
			console.log("init",@$el)
			$("body").on "click",".rmodal-mask",=> 
				console.log "mask click"
				@hide()
				# .on "click","[data-toggle=rmodal]", ->
				# 	$btn = $(this)
				# 	$target = $($btn.attr("data-target"))
				# 	$target.toggleClass("show")
					# $body.toggleClass("rmodal-show")
	$ -> 
		$(".rmodal").each ->
			$el = $(this)
			handler = new RModal(el:this)
		$body = $("body")
		isShowed = no
		checkIsShowed = -> 
			isShowed = $body.hasClass("rmodal-show")
		$body
			.on "click","[data-toggle=rmodal]", ->
				$btn = $(this)
				$target = $($btn.attr("data-target"))
				rmodal = $target.data("rmodal")
				console.log $btn,rmodal
				rmodal.toggle()
			# .on "touchstart", ->
			# 	checkIsShowed()
			# 	yes
			# .on "touchmove",(e)->
			# 	if isShowed then e.preventDefault()
			# 	yes
			# .on "touchend", ->
			# 	isShowed = no
			# 	yes