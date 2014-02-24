showCategory = (rel) ->
  $(".filter a").removeClass("current")
    .filter("[rel='#{rel}']")
    .addClass("current")
  $(".item").each (i, el) ->
    el = $(el)
    el.toggleClass "hidden", el.attr("rel") != rel

showCategory "camera"

$(".filter").on "click", (e) ->
  showCategory $(e.target).closest("a").attr("rel")
