@Wardrobe.module "PostApp.New", (New, App, Backbone, Marionette, $, _) ->

  class New.Post extends App.Views.PostView

    initialize: ->
      App.vent.on "post:new:seed", (contents) =>
        @fillForm contents

    onRender: ->
      @$(".publish").text("Publish Post")
      @$("#date").attr("placeholder", moment().format("MMM Do, YYYY [9am]"))

    # Fill the form from a drag and dropped md file
    fillForm: (contents) ->
      @$("#slug").val contents.fields.slug
      @$("#title").val contents.fields.title
      @editor.codemirror.setValue contents.content
      @$("#publish_date").val contents.fields.date
      $("#js-tags").val(contents.fields.tags.join()) if contents.fields.tags.length > 0
