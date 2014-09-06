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
			@$mask.show()
			setTimeout =>
				$("body").addClass("rmodal-show")
				@$el.addClass("show")
				@$el.trigger("rmodal-show")
			,33
		toggle:()->
			if @$el.hasClass("show") then @hide()
			else @show()
		setMask:()->
			@$mask = $("<div>","class":"rmodal-mask").insertBefore(@$el)
				.click => 
					@hide()
				.on "webkitTransitionEnd", =>
					unless @$el.hasClass("show") then @$mask.hide()
		initialize:(options)->
			@$el.data("rmodal",this)
			@setMask()
			if @$el.hasClass("show") then @show()
			console.log("init",@$el)

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