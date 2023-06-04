(function (api) {
  // Extends our custom "petite-stories" section.
  api.sectionConstructor["petite-stories"] = api.Section.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });

  // Extends our custom "petite-stories" section.
  api.controlConstructor["petite_stories_control"] = api.Control.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });
})(wp.customize);
