class Views.Overlay extends Backbone.View
  tagName: "article"
  className: "overlay"
  events:
    "click .overlay-close": "detach"

  initialize: (options = {}) ->
    options.el.remove()
    @className = @className + " " + options.type if options.type
    
  bind: ->
    body = $("body")
    body.addClass("static").on "keyup", @keyHandler
    @mask.on "click", @clickHandler

  unbind: ->
    body = $("body")
    body.removeClass("static").off "keyup", @keyHandler
    @mask.off "click", @clickHandler

  detach: ->
    @unbind()
    @mask.remove()

  attach: ->
    @render()
    $("body").append @mask
    @bind()

  render: ->
    unless @mask
      @mask = $("<div>").addClass "overlay-mask"
      @mask.append $("<div>").addClass("overlay-container").append @$el.addClass(@className)
    @

  keyHandler: (e) =>
    @detach() if e.which is 27 # Esc

  clickHandler: (e) =>
    @detach() if $(e.target).is ".overlay-container"
