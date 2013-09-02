$("#mobile-nav-button").click (e) ->
  $(this).toggleClass "active"
  $("body").toggleClass "sidebar-open"
