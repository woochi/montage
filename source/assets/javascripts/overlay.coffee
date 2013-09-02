transitionend = ->
  transitionEndEventNames =
    'WebkitTransition': 'webkitTransitionEnd'
    'MozTransition': 'transitionend'
    'OTransition': 'oTransitionEnd'
    'msTransition': 'MSTransitionEnd'
    'transition': 'transitionend'
  transitionEndEventNames[Modernizr.prefixed('transition')]

closeOverlay = ->
  $mask = $(".overlay-mask")
  $mask.toggleClass "in out"
  $(".overlay-container.in").removeClass("in").on transitionend(), ->
    $mask.remove()
    $("body, #page").removeClass "no-scroll"

$(".overlay-button").click (e) ->
  $container = $("#" + $(this).data("overlay"))
  $mask = $("<div>").addClass "overlay-mask"
  $("body, #page").addClass("no-scroll")
  $("#page").prepend $mask
  $container.addClass "in"
  $container.find(".overlay-close").one "click", closeOverlay
  $mask.addClass("in").one "click", closeOverlay
