class Views.Equipment extends Backbone.View
  tagName: "ul"
  id: "equipment-list"
  className: "clean"

  initialize: (opts) ->
    opts.router.on "route:filter", (category) =>
      @$el.empty()
      @render category

  renderItem: (item) ->
    $("<li>").addClass("item").append $("<a>").append $("<header>").append(
      $("<span>").addClass("model").text(item.get("manufacturer") + " " + item.get("model")),
      $("<span>").addClass("type").text item.get("description")
    )

  render: (category) ->
    i = 0
    category = if category then category else "camera"
    for item in @collection.where(category: category)
      elem = @renderItem(item).toggleClass "last", i % 3 is 2
      @$el.append elem
      i++
    @