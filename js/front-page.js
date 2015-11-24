;(function ( $, window, document, undefined ) {
  "use strict";

  var pluginName = "rula_tabs",
  defaults = {
    propertyName: "value"
  };

  function Plugin ( element, options ) {
    this.element = element;
    this.settings = $.extend( {}, defaults, options );
    this._defaults = defaults;
    this._name = pluginName;

    this.tabList = undefined;
    this.tabContent = undefined;

    this.init();
    this.generateTabs();
    this.displayTabContent(0);
  }

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
      $tabs = this.tabs,
      $activeTab = $tabList.children('.active').first();

      // there's gotta be a better way than this...
      var $newActiveTab = $tabs.eq(tabIndex); 
      var $tab = $tabs.eq($activeTab.data('tab-index'));

      // Move the tabContent back to where it was...
      $tabContent.contents().appendTo($tab);

      // Set the active tab class
      $activeTab.removeClass('active');
      $tabList.children().eq(tabIndex).addClass('active');

      // insert content of tab into display
      // NB: THIS MOVES THE ENTIRE NODE
      $newActiveTab.contents().appendTo($tabContent);
    }
  });

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
