;(function ( $, window, document, undefined ) {

  "use strict";

  var pluginName = "rula_tabs",
  defaults = {
    propertyName: "value"
  };

  // The actual plugin constructor
  function Plugin ( element, options ) {
    this.element = element;
    // jQuery has an extend method which merges the contents of two or
    // more objects, storing the result in the first object. The first object
    // is generally empty as we don't want to alter the default options for
    // future instances of the plugin
    this.settings = $.extend( {}, defaults, options );
    this._defaults = defaults;
    this._name = pluginName;

    this.tabList = undefined;
    this.tabContent = undefined;

    this.init();
    this.generateTabs();
    this.displayTabContent(0);
  }

  // Avoid Plugin.prototype conflicts
  $.extend(Plugin.prototype, {
    init: function() {
      // Grab the list of tabs
      this.tabs = $(this.element).children('.tab');

      // Prepend the container for tabs
      this.tabList = $('<ul class="tab-list"></ul>').prependTo(this.element);

      // Append the container for displaying tab content
      this.tabContent = $('<div class="tab-content"></div>').appendTo(this.element);
    },
    generateTabs: function() {
      var plugin_context = this;
      var $tabs = this.tabs;
      var $tabList = this.tabList; // there's gotta be a better way than this...

      // For each <div class="tab"> add it to the tabList, and bind an event handler to it.
      $tabs.each(function(index, value) {
        var $tab = $('<li data-tab-index="'+ index +'">' + $(value).data('tab-title') + '</li>').appendTo($tabList);

        $tab.click(function() { // there's gotta be a better way than this...
          plugin_context.displayTabContent($(this).data('tab-index')); 
        });
      });
    },
    displayTabContent: function(tabIndex) {
      var $tabContent = this.tabContent,
      $tabList = this.tabList,
      $newActiveTabContent = this.tabs.eq(tabIndex).html(); // there's gotta be a better way than this...

      // Set the active tab class
      $tabList.children('.active').removeClass('active');
      $tabList.children().eq(tabIndex).addClass('active');

      // insert content of tab into display
      $tabContent.empty().append( $newActiveTabContent );
    }
  });

  // A really lightweight plugin wrapper around the constructor,
  // preventing against multiple instantiations
  $.fn[ pluginName ] = function ( options ) {
    return this.each(function() {
      if ( !$.data( this, "plugin_" + pluginName ) ) {
        $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
      }
    });
  };

})( jQuery, window, document );

$(function() {
  $('.tabset').rula_tabs();
});
