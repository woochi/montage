$ = require("jquery")

$ ->
  mobileNavOpen = false

  closeOverlay = ->
    $mask = $(".overlay-mask")
    $mask.remove()
    $("body, #page").removeClass "no-scroll"
    $(".overlay-container.in").removeClass("in")

  showCategory = (rel) ->
    $(".filter a").removeClass("current")
      .filter("[rel='#{rel}']")
      .addClass("current")
    $(".item").each (i, el) ->
      el = $(el)
      el.toggleClass "hidden", el.attr("rel") != rel

  toggleMobileNav = ->
    $("#mobile-nav-button").toggleClass "active"
    $("body").toggleClass "sidebar-open"
    mobileNavOpen = !mobileNavOpen
    mobileNavOpen

  bindScroll = (bind) ->
    if bind
      $(window).one "scroll", toggleMobileNav
    else
      $(window).off "scroll", toggleMobileNav

  $(".overlay-button").click (e) ->
    $container = $("#" + $(this).data("overlay"))
    $mask = $("<div>").addClass "overlay-mask"
    $("body, #page").addClass("no-scroll")
    $("#page").prepend $mask
    $container.addClass "in"
    $container.find(".overlay-close").one "click", closeOverlay
    $mask.addClass("in").one "click", closeOverlay

  $("#mobile-nav-button").click (e) ->
    bindScroll toggleMobileNav()

  $(".filter").on "click", (e) ->
    showCategory $(e.target).closest("a").attr("rel")

  showCategory "camera"
