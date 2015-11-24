;(function ( $, window, document, undefined ) {
  "use strict";

  var pluginName = "rula_tabs",
  defaults = {
  };

  function Plugin ( element, options ) {
    this.element = element;
    this.settings = $.extend( {}, defaults, options );
    this._defaults = defaults;
    this._name = pluginName;

    this.init();
    this.generateTabs();
    this.displayTabContent(0);
  }

  $.extend(Plugin.prototype, {
    init: function() {
      // Grab the list of tabs
      this.tabs = $(this.element).children('.tab');

      // Prepend the container for tabs
      this.tabList = $('<ul class="tab-list"/>').prependTo(this.element);

      // Append the container for displaying tab content
      this.tabContent = $('<div class="tab-content"/>').appendTo(this.element);
    },
    generateTabs: function() {
      // there's gotta be a better way than this...
      var plugin_context = this,
          $tabList       = this.tabList; 

      this.tabs.each(function(index, el) {
        var tabTitle = $(el).data('tab-title'),
            $tab     = $('<li>' + tabTitle + '</li>').data('tab-index', index).appendTo($tabList);

        // Event handler for clicking tabs
        $tab.click(function() {
          plugin_context.displayTabContent( $(this).data('tab-index') ); 
        });
      });
    },
    displayTabContent: function(tabIndex) {
      var $tabContent = this.tabContent,
          $tabList    = this.tabList,
          $tabs       = this.tabs,
          $activeTab  = $tabList.children('.active').first();

      // there's gotta be a better way than this...
      var $newActiveTab = $tabs.eq(tabIndex); 
      var $tab = $tabs.eq($activeTab.data('tab-index'));

      // Move the tabContent back to where it was...
      $tabContent.contents().appendTo($tab);

      // Set the active tab classes
      $activeTab.removeClass('active');
      $tabList.children().eq(tabIndex).addClass('active');

      // insert content of tab into display
      // NB: THIS MOVES THE ENTIRE NODE SO WE NEED TO MOVE IT BACK...
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