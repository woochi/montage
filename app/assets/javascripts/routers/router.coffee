class Routers.Equipment extends Backbone.Router
  routes:
    "filter/:category":     "filter"
    "filter":               "filter"
    "details/:id":          "show"
    "*route":               "equipmentList"

  initialize: (param) ->
    collection = new Collections.Equipment window.Equipment
    equipment = new Views.Equipment
      el: $("#equipment-list")
      collection: collection
      router: @
    filters = new Views.Equipment.Filters
      el: $("#equipment-filters")
      collection: collection
      router: @
    equipment.render()
    filters.render()

  filter: (category) ->

  show: (id) ->
    console.log "showing product #{id}"