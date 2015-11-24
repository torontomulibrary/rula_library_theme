<style>
  .tab {
    display: none;
  }
</style>

<div class="tabset">
  <div class="tab" data-tab-title="Search Everything">
    <form action="http://ryerson.summon.serialssolutions.com/search" method="GET">
      <input type="search" placeholder="Search Everything">
      <button type="submit">Submit</button>
    </form>
  </div>

  <div class="tab" data-tab-title="Books &amp; Media">
    <div class="tabset">
      <div class="tab" data-tab-title="Keywords">
        <form action="http://catalogue.library.ryerson.ca/search/X" method="GET">
          <input type="search" placeholder="Keywords">
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="tab" data-tab-title="Title">
        <form action="http://catalogue.library.ryerson.ca/search/t" method="GET">
          <input type="search" placeholder="Title">
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="tab" data-tab-title="Author">
        <form action="http://catalogue.library.ryerson.ca/search/a" method="GET">
          <input type="search" placeholder="Author">
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="tab" data-tab-title="Course Readings">
        <form action="http://catalogue.library.ryerson.ca/search/r" method="GET">
          <input type="search" placeholder="Course Code">
          <button type="submit">Submit</button>
        </form>
        
        <form action="http://catalogue.library.ryerson.ca/search/p" method="GET">
          <input type="search" placeholder="Course Instructor">
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="tab" data-tab-title="Call Number">
        <form action="http://catalogue.library.ryerson.ca/search/c" method="GET">
          <input type="search" placeholder="Call Number">
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="tab" data-tab-title="Subject">
        <form action="http://catalogue.library.ryerson.ca/search/d" method="GET">
          <input type="search" placeholder="Library of Congress Subject">
          <button type="submit">Submit</button>
        </form>
      </div>      
    </div>
  </div>

  <div class="tab" data-tab-title="Journals List">
    <form action="http://sfx.scholarsportal.info/ryerson/a-z/default" method="GET">
      <input type="search" placeholder="Search Journals">
      <button type="submit">Submit</button>
      <input type="hidden" name="param_textSearchType_save" value="startsWith">
      <input type="hidden" name="param_chinese_checkbox_type_save" value="Pinyin">
      <input type="hidden" name="param_lang_save" value="eng">
      <input type="hidden" name="param_letter_group_save" value="">
      <input type="hidden" name="param_perform_save" value="searchTitle">
      <input type="hidden" name="param_letter_group_script_save" value="">
      <input type="hidden" name="param_chinese_checkbox_save" value="0">
      <input type="hidden" name="param_services2filter_save" value="getHolding">
      <input type="hidden" name="param_services2filter_save" value="getFullTxt">
      <input type="hidden" name="param_current_view_save" value="table">
      <input type="hidden" name="param_jumpToPage_save" value="1">
      <input type="hidden" name="param_type_save" value="textSearch">
      <input type="hidden" name="param_type_value" value="textSearch">
      <input type="hidden" name="param_jumpToPage_value" value="">
      <input type="hidden" name="param_chinese_checkbox_value" id="param_chinese_checkbox_value" value="0">
    </form>
    <a href="http://sfx.scholarsportal.info/ryerson/a-z/default?param_perform_value=searchCategories">Browse Journals by Subject</a>
  </div>

  <div class="tab" data-tab-title="Research Databases">
    <form>
      <select>
        <option selected="selected">Select a Subject Area...</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=441#tabs-441-101">Accounting</option>
        <option value="http://learn.library.ryerson.ca/aero">Aerospace Engineering</option>
        <option value="http://learn.library.ryerson.ca/architecture">Architecture</option>
        <option value="http://learn.library.ryerson.ca/arthistory/articles">Art History</option>
        <option value="http://learn.library.ryerson.ca/arts">Arts &amp; Humanities</option>
        <option value="http://learn.library.ryerson.ca/biology ">Biology</option>
        <option value="http://learn.library.ryerson.ca/biomed">Biomedical Engineering</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=841#tabs-841-101">Business, Administrative and Labour Law</option>
        <option value="http://learn.library.ryerson.ca/businessarticles">Business &amp; Economics</option>
        <option value="https://library.cf.ryerson.ca/guides/view/?guide=821#tabs-821-101">Business Management</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=537#tabs-537-101">Canadian Law</option>
        <option value="http://learn.library.ryerson.ca/caribbean/articles">Caribbean Studies</option>
        <option value="http://learn.library.ryerson.ca/chemeng">Chemical Engineering</option>
        <option value="http://learn.library.ryerson.ca/chemistry">Chemistry</option>
        <option value="http://learn.library.ryerson.ca/cyc">Child &amp; Youth Care</option>
        <option value="http://learn.library.ryerson.ca/civil">Civil Engineering</option>
        <option value="http://learn.library.ryerson.ca/communication/articles">Communication &amp; Culture</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=541#tabs-541-101">Community Development</option>
        <option value="http://learn.library.ryerson.ca/compsci">Computer Science</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-1">Creative Industries</option>
        <option value="http://learn.library.ryerson.ca/criminology/articles">Criminology</option>
        <option value="http://learn.library.ryerson.ca/dance">Dance</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-2">Digital Media</option>
        <option value="http://learn.library.ryerson.ca/disability-studies/articles">Disability Studies</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=488#tabs-488-101">Documentary Media</option>
        <option value="http://learn.library.ryerson.ca/ecs">Early Childhood Studies</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=722">Economics</option> <option value="http://learn.library.ryerson.ca/ece">Electrical &amp; Computer Engineering</option>
        <option value="http://learn.library.ryerson.ca/english/articles">English</option>
        <option value="https://library.cf.ryerson.ca/guides/view/?guide=492#tabs-492-101">Entrepreneurship</option>
        <option value="http://learn.library.ryerson.ca/env">Environmental Studies</option>
        <option value="http://learn.library.ryerson.ca/fashion/articles">Fashion</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=504#tabs-504-101">Film Studies</option>
        <option value="http://learn.library.ryerson.ca/nutrition">Food and Nutrition</option>
        <option value="http://learn.library.ryerson.ca/french">French</option>
        <option value="http://learn.library.ryerson.ca/geography">Geography &amp; Spatial Analysis</option>
        <option value="http://learn.library.ryerson.ca/gerontology">Gerontology</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-3">Graphic Communications Management</option>
        <option value="http://learn.library.ryerson.ca/c.php?g=270697">Health &amp; Medicine</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=500#tabs-500-101">Health Services Management</option>
        <option value="http://learn.library.ryerson.ca/history/articles">History</option>
        <option value="http://learn.library.ryerson.ca/hospitality/scholarly">Hospitality and Tourism</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=503#tabs-503-101">Human Resources Management</option>
        <option value="http://learn.library.ryerson.ca/immigration/articles">Immigration and Settlement</option>
        <option value="http://learn.library.ryerson.ca/ITM/articles">Information Technology Management</option>
        <option value="http://learn.library.ryerson.ca/rsid">Interior Design</option>
        <option value="https://library.cf.ryerson.ca/guides/view/?guide=508">International Business and Economics</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-4">Journalism</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=537#tabs-537-101">Law, Canadian</option>
        <option value="http://learn.library.ryerson.ca/marketing/articles">Marketing</option>
        <option value="http://learn.library.ryerson.ca/math">Mathematics</option>
        <option value="http://learn.library.ryerson.ca/mechind">Mechanical &amp; Industrial Engineering</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=761#tabs-761-101">Midwifery &amp; Childbirth</option>
        <option value="http://learn.library.ryerson.ca/molsci">Molecular Science</option>
        <option value="http://learn.library.ryerson.ca/multidisciplinary">Multi-Disciplinary</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=512#tabs-512-101">Music</option>
        <option value="http://learn.library.ryerson.ca/Aboriginal-Topics#s-lib-ctab-3813620-1">Native/Aboriginal Studies</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=513#tabs-513-101">New Media</option>
        <option value="http://learn.library.ryerson.ca/newspapers">Newspapers</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=122#tabs-122-101">Nursing</option>
        <option value="http://learn.library.ryerson.ca/nutrition">Nutrition &amp; Food</option>
        <option value="http://learn.library.ryerson.ca/ohs">Occupational Health and Safety</option>
        <option value="http://learn.library.ryerson.ca/philosophy/articles">Philosophy</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=517#tabs-517-101">Photographic Preservations</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=518#tabs-518-101">Photography</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=361#tabs-361-101">Physiotherapy</option>
        <option value="http://learn.library.ryerson.ca/physics">Physics</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=822#tabs-822-101">Politics &amp; Governance</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-5">Professional Communications</option>
        <option value="http://learn.library.ryerson.ca/psychology">Psychology</option>
        <option value="http://learn.library.ryerson.ca/ohs">Public Health</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=823#tabs-823-101">Public Policy &amp; Administration</option>
        <option value="https://library.cf.ryerson.ca/guides/view?guide=522#tabs-522-101">Public Relations</option>
        <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-6">Radio &amp; Television Arts</option> 
        <option value="https://library.cf.ryerson.ca/guides/view?guide=526#tabs-526-101">Retail Management</option>
        <option value="http://learn.library.ryerson.ca/scitech">Science &amp; Technology Studies</option>
        <option value="http://learn.library.ryerson.ca/socialsciences ">Social Sciences</option>
        <option value="http://learn.library.ryerson.ca/socialwork/articles">Social Work</option>
        <option value="http://learn.library.ryerson.ca/sociology/articles">Sociology</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=528#tabs-528-101">Spanish</option>
        <option value="http://learn.library.ryerson.ca/geography">Spatial Analysis</option>
        <option value="http://learn.library.ryerson.ca/theatre">Theatre</option>
        <option value="http://learn.library.ryerson.ca/planning">Urban &amp; Regional Planning</option> 
      </select>
      <button type="submit">Submit</button>
    </form>
    <a href="http://library.ryerson.ca/articles/indexes_title/">Browse A-Z Databases List</a>
    <!-- END Research Databases -->
  </div>

  <div class="tab" data-tab-title="More">
    <a href="http://digitalcommons.ryerson.ca/" data-ga-event="Homepage,Tab,IR">Digital Commons</a>
    <a href="http://minisis.library.ryerson.ca/m2a/" data-ga-event="Homepage,Tab,ASC">Archives &amp; Special Collections</a>
    <a href="https://library.cf.ryerson.ca/madar/geospatial/libdata/by_keyword.cfm" data-ga-event="Homepage,Tab,GIS">GIS Data</a>
    <a href="http://library.ryerson.ca/services/av/search/" data-ga-event="Homepage,Tab,Videos">Videos</a>
  </div>
</div>