class Views.Equipment.Filters extends Backbone.View
  tagName: "ul"
  id: "equipment-filters"
  class: "clean"

  initialize: (opts) ->
    opts.router.on "route:filter", (category) =>
      category = category or "camera"
      links = @$(".category")
      links.find(".current").removeClass "current"
      links.find("#filter-#{category}").addClass "current"

  render: ->
    @$el.empty()

    for category in @collection.categories
      link = $("<a>").attr(
        href: "#filter/#{category.id}"
        id: "filter-#{category.id}"
      ).append(
        $("<span>").addClass("icon-#{category.iconName}")
        $("<span>").html("&nbsp; #{category.name}")
      )
      @$el.append $("<li>").addClass("category").append link
    @$("#filter-camera").addClass "current"
    @