class Collections.Equipment extends Backbone.Collection
  model: Models.Item
  categories: [
    id: "camera"
    name: "Kamerat"
    iconName: "camera"
  ,
    id: "audio"
    name: "Audio"
    iconName: "microphone"
  ,
    id: "light"
    name: "Valaistus"
    iconName: "lightbulb"
  ,
    id: "screen"
    name: "Valkokankaat"
    iconName: "calendar-empty"
  ]