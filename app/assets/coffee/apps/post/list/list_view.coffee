@Wardrobe.module "PostApp.List", (List, App, Backbone, Marionette, $, _) ->

  class List.PostItem extends App.Views.ItemView
    template: "post/list/templates/item"
    tagName: "tr"

    attributes: ->
      if @model.get("active") is "1"
        class: "post-item"
      else
        class: "post-item draft"

    triggers:
      "click .delete" : "post:delete:clicked"

    events:
      "click .details" : "edit"

    onShow: ->
      allUsers = App.request "get:all:users"
      $avEl = @$(".avatar")
      if allUsers.length is 1
        $avEl.hide()
      else
        user = @model.get("user")
        $avEl.avatar user.email, $avEl.attr("width")
        @$('.js-format-date').formatDates()

    templateHelpers:
      previewUrl: ->
        "#{App.request("get:base:url")}/post/preview/#{@id}"

      status: ->
        if @active is "1" and @publish_date > moment().format('YYYY-MM-DD HH:mm:ss')
          "Scheduled"
        else if @active is "1"
          "Active"
        else
          "Draft"

    edit: (e) ->
      e.preventDefault()
      App.vent.trigger "post:item:clicked", @model

  class List.Empty extends App.Views.ItemView
    template: "post/list/templates/empty"
    tagName: "tr"

  class List.Posts extends App.Views.CompositeView
    template: "post/list/templates/grid"
    itemView: List.PostItem
    emptyView: List.Empty
    itemViewContainer: "tbody"
    className: "span12"
