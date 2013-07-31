window.Models = {}
window.Collections = {}
window.Views = {}
window.Routers = {}

$ ->
  ###
  header = $("header.hero")
  if header?
    heights =
      "jaseneksi/": 640
      "ajankohtaista/": 637
    bannerHeight = if header.hasClass "full" then 672 else 504
    page = window.location.pathname.replace /\/+/, "" 
    bgHeight = heights[page] or 843
    scrollHero(header, bannerHeight, bgHeight, 140)
    $(window).on "scroll resize", -> scrollHero(header, bannerHeight, bgHeight, 140)
    ###

  $("[data-overlay]").each (i, link) ->
    link = $(link)
    content = $("#" + link.data "overlay")
    if content
      overlay = new Views.Overlay el: content
      link.on "click", -> overlay.attach()

  new Routers.Equipment()
  Backbone.history.start()