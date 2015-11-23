$.fn.rula_tabs = function() {
  // Initialize plugin
  var self = this;

  // Insert container for tab
  self.prepend('<ul class="tab-list"></ul>');
  var tabList = self.children('.tab-list').first();

  // Insert container for displaying tab content
  self.append('<div class="tab-display"></div>');
  var tabDisplay = self.children('.tab-display').first();

  // Generate Tabs
  $.each(self.children('.tab'), generateTabs);

  // Insert content of first tab into the display
  updateTabDisplay( self.children('.tab').first() );

  // Bind onClick event to tabs
  tabList.children('li').click(function() {
    var tabIndex = $(this).data('tab-index');
    updateTabDisplay( self.children('.tab').eq(tabIndex) );
  });

  // Function to generate clickable tabs
  function generateTabs(index, value) {
    tabList.append('<li data-tab-index="'+ index +'">' + $(value).data('tab-title') + '</li>');
  }

  // Update the tab display element
  function updateTabDisplay(element) {
    tabDisplay.empty();
    tabDisplay.append( element.html() );
  }
};

$(function() {
  $('.tabset').rula_tabs();
});
