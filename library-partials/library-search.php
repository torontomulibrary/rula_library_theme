<div style="clear: both;"></div>
<div style="padding-top: 2em;">
 <!-- SEARCH TABS --> 
  <div id="s_contain">
  <ul id="s_nav">
   <!--    Main Level Tabs
    - the "data-tab_content" attribute refers to what content should be displayed. 
    - It should be unique per tab.
    - eg. data-tab_content="XYZ" -->
 <li><a href="" class="s_tab_link s_tab_selected" data-tab_content="everything" data-ga-event="Homepage,Tab,SearchEverything">Search Everything</a></li>
 <li><a href="" class="s_tab_link" data-tab_content="catalog" data-ga-event="Homepage,Tab,Books">Books &amp; Media</a></li>
 <li><a href="" class="s_tab_link" data-tab_content="search3" data-ga-event="Homepage,Tab,Journals">Journals List</a></li>
 <li><a href="" class="s_tab_link" data-tab_content="search4" data-ga-event="Homepage,Tab,Databases">Research Databases</a></li>
 <li><a href="" class="s_tab_link" data-tab_content="search5" data-ga-event="Homepage,Tab,More">More</a></li>
  </ul>
  <ul id="s_content">
   <!--    Main Level Content -->
    <!-- Each li represents the content of a tab -->
   <!--  - The id should be "s_tab-" and then a reference to the tab that opens it-->
   <!-- - eg. id="s_tab-XYZ" -->
   <!-- Search Everything Tab Content --> 
 <li id="s_tab-everything" class="s_tab_open">
 <div class="s_tab_wrap">
 <form id="searcheverything" name="search" method="GET" action="http://ryerson.summon.serialssolutions.com/search" >
 <button class="s_search_button" type="submit">Go</button>
 <input id="searcheverythinginput" class="s_search_feild query" type="search" name="s.q" autocomplete="off" title="Search for journal articles, books, newspapers and more!" placeholder="Search for journal articles, books, newspapers and more!" x-webkit-speech speech/>
 <input type="hidden" name="spellcheck" value="true">
 </form>
 <div style="clear:both;padding-top:1px;padding-bottom:15px; "> 
 <hr />
 <span style="float:left;font-size:12px;"> 
 <a href="http://library.ryerson.ca/summon/">What is this?</a><br /> 
 </span> 
 <span style="float:right;font-size:12px;">
 <a href="http://ryerson.summon.serialssolutions.com/advanced">Advanced Search</a> 
 </span> 
 </div> 
 <div style="clear:both;"></div>
 </div>
 </li>
 <!--  Catalog Tab Content --> 
 <li id="s_tab-catalog">
 <ul class="s_sub_nav">
 <!--  Sub Level Tabs
  - the "data-sub_tab_content" attribute refers to what content should be displayed. 
  - It should be unique per sub tab.
  - eg. data-sub_tab_content="subXYZ"  -->
 <li><a href="" class="s_sub_tab_link" data-sub_tab_content="Keywords" data-ga-event="Homepage,Tab,BooksKeywords">Keywords</a></li>
 <li><a href="" class="s_sub_tab_link s_sub_tab_selected" data-sub_tab_content="Title" data-ga-event="Homepage,Tab,BooksTitle">Title</a></li>
 <li><a href="" class="s_sub_tab_link" data-sub_tab_content="Author" data-ga-event="Homepage,Tab,BooksAuthor">Author</a></li>
 <li><a href="" class="s_sub_tab_link" data-sub_tab_content="Course" data-ga-event="Homepage,Tab,BooksCourseReads">Course Readings</a></li>
 <li><a href="" class="s_sub_tab_link" data-sub_tab_content="Call" data-ga-event="Homepage,Tab,BooksCallNum">Call #</a></li>
 <li><a href="" class="s_sub_tab_link" data-sub_tab_content="Subject" data-ga-event="Homepage,Tab,BooksSubject">LC Subject</a></li>
 </ul>
 <div class="s_tab_wrap">
 <ul class="s_sub_content">
 <!--  Main Level Content
  - Each li represents the content of a sub tab
  - The id should be "s_sub_tab-" and then a reference to the tab that opens it
  - eg. id="s_sub_tab-subXYZ" -->
 <!--  Catalogue - Keywords Tab Content --> 
 <li id="s_sub_tab-Keywords" class="" >
 <p class="s_title">Search by Keyword</p>
 <p class="s_description">Find books, journals, DVDs, CDs, ebooks, theses, maps, Government Documents...</p>
 <hr />
 <form method="get" action="http://catalogue.library.ryerson.ca/search/X">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter your keywords" placeholder="Enter your keywords..." x-webkit-speech speech/>
 </form>
 <span style="float:right;font-size:12px;padding:5px 0 0 0;"> 
 <a href="http://catalogue.library.ryerson.ca/screens/mainmenu.html">Advanced Search</a> 
 </span> 
 <div style="clear:both;"></div>
 </li>
 <!--  Catalogue - Title Tab Content --> 
 <li id="s_sub_tab-Title" class="s_sub_tab_open" >
 <p class="s_title">Search by Title</p>
 <p class="s_description">eg. Boom Bust and Echo<br/> Map that Changed the World</p>
 <hr />
 <form method="get" action="http://catalogue.library.ryerson.ca/search/t">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter the book title" placeholder="Enter the book title..." x-webkit-speech speech/>
 </form>
 <div style="clear:both;"></div>
 </li>
 <!--  Catalogue - Author Tab Content --> 
 <li id="s_sub_tab-Author" class="" >
 <p class="s_title">Search by Author</p>
 <p class="s_description">eg. Smith, John <br />Canadian Medical Association <br />Tragically Hip</p>
 <hr />
 <form method="get" action="http://catalogue.library.ryerson.ca/search/a">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter the author's name" placeholder="Enter the author's name..." x-webkit-speech speech/>
 </form>
 <div style="clear:both;"></div>
 </li>
 <!--  Catalogue - Course Readings Tab Content --> 
 <li id="s_sub_tab-Course" class="" >
 <p class="s_title">Search by Course Code</p>
 <p class="s_description" style="padding-bottom:5px;">eg. ece210</p>
 <form method="get" action="http://catalogue.library.ryerson.ca/search/r">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter your course code" placeholder="Enter your course code..." x-webkit-speech speech/>
 </form>
 <div style="padding:5px 0;clear:both">
 <hr />
 </div>
 <p class="s_title">Search by Instructor</p>
 <p class="s_description" style="padding-bottom:5px;">eg. Gao, Yunxiang</p>
 <form method="get" action="http://catalogue.library.ryerson.ca/search/p">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter your Instructor's name" placeholder="Enter your Instructor..." x-webkit-speech speech/>
 </form>
 <div style="clear:both;"></div>
 </li>
 <!--  Catalogue - Call number Tab Content --> 
 <li id="s_sub_tab-Call" class="" >
 <p class="s_title">Search by Call Number</p>
 <p class="s_description">eg. QA403.P74 2004<br/>HD31</p>
 <hr />
 <form method="get" action="http://catalogue.library.ryerson.ca/search/c">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter a call number" placeholder="Enter a call number..." x-webkit-speech speech/>
 </form>
 <div style="clear:both;"></div>
 </li>
 <!--  Catalogue - Subject Tab Content --> 
 <li id="s_sub_tab-Subject" class="" >
 <p class="s_title">Search by Library of Congress Subject</p>
 <p class="s_description">eg. caribbean area history<br/>eating disorders<br/>women employment canada</p>
 <hr />
 <form method="get" action="http://catalogue.library.ryerson.ca/search/d">
 <button class="s_search_button" type="submit">Go</button>
 <input class="s_search_feild" name="SEARCH" type="search" title="Enter a subject" placeholder="Enter a subject..." x-webkit-speech speech/>
 </form>
 <div style="clear:both;"></div>
 </li>
 </ul>
 </div>
 </li>
 <!--  Journals List Tab Content --> 
 <li id="s_tab-search3">
 <div class="s_tab_wrap">
 <form method="get" action="http://sfx.scholarsportal.info/ryerson/a-z/default">
 <button class="s_search_button" type="submit">Go</button>
 <input type="hidden" name="param_textSearchType_save" value="startsWith">
 <input type="search" title="Search by entering a Journal Title" placeholder="Enter a Journal Title..." class="s_search_feild" name="param_pattern_value" value="" x-webkit-speech speech>
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
<div style="clear:both;font-size:12px;padding-top:5px;">or <a href="http://sfx.scholarsportal.info/ryerson/a-z/default?&param_sid_save=d4a163e79d66ac8072ca024f58bde46d&param_chinese_checkbox_type_save=Pinyin&param_lang_save=eng&param_letter_group_save=&param_perform_save=searchTitle&param_letter_group_script_save=&param_chinese_checkbox_save=0&param_services2filter_save=getHolding&param_services2filter_save=getFullTxt&param_current_view_save=table&param_jumpToPage_save=1&param_type_save=textSearch&param_textSearchType_save=startsWith&param_ui_control_scripts_save=&&param_perform_value=searchCategories">Browse Journals by Subject</a></div>
 <div style="clear:both;"></div>
 </div>
 </li>
 <!--  Research Databases Tab Content --> 
 <li id="s_tab-search4">
 <form name="f_loadpage">
 <div class="s_tab_wrap">
 <button class="s_search_button" type="submit">Go</button>
 <div class="inputDiv">
 <select id="subjectSelect" name="goto" size="1">
<option selected="selected">Select A Subject Area...</option>
<option value="https://library.cf.ryerson.ca/guides/view?guide=441#tabs-441-101">Accounting</option> <option value="http://learn.library.ryerson.ca/aero">Aerospace Engineering</option> <option value="http://learn.library.ryerson.ca/architecture">Architecture</option> <option value="http://learn.library.ryerson.ca/arthistory/articles">Art History</option> <option value="http://learn.library.ryerson.ca/arts">Arts &amp; Humanities</option> <option value="http://learn.library.ryerson.ca/biology ">Biology</option> <option value="http://learn.library.ryerson.ca/biomed">Biomedical Engineering</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=841#tabs-841-101">Business, Administrative and Labour Law</option> <option value="http://learn.library.ryerson.ca/businessarticles">Business &amp; Economics</option> <option value="https://library.cf.ryerson.ca/guides/view/?guide=821#tabs-821-101">Business Management</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=537#tabs-537-101">Canadian Law</option> <option value="http://learn.library.ryerson.ca/caribbean/articles">Caribbean Studies</option> <option value="http://learn.library.ryerson.ca/chemeng">Chemical Engineering</option> <option value="http://learn.library.ryerson.ca/chemistry">Chemistry</option><option value="http://learn.library.ryerson.ca/cyc">Child &amp; Youth Care</option> <option value="http://learn.library.ryerson.ca/civil">Civil Engineering</option> <option value="http://learn.library.ryerson.ca/communication/articles">Communication &amp; Culture</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=541#tabs-541-101">Community Development</option> <option value="http://learn.library.ryerson.ca/compsci">Computer Science</option> <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-1">Creative Industries</option><option value="http://learn.library.ryerson.ca/criminology/articles">Criminology</option> <option value="http://learn.library.ryerson.ca/dance">Dance</option> <option value=
"http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-2">Digital Media</option><option value="http://learn.library.ryerson.ca/disability-studies/articles">Disability Studies</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=488#tabs-488-101">Documentary Media</option> <option value="http://learn.library.ryerson.ca/ecs">Early Childhood Studies</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=722">Economics</option> <option value="http://learn.library.ryerson.ca/ece">Electrical &amp; Computer Engineering</option> <option value="http://learn.library.ryerson.ca/english/articles">English</option><option value="https://library.cf.ryerson.ca/guides/view/?guide=492#tabs-492-101">Entrepreneurship</option><option value="http://learn.library.ryerson.ca/env">Environmental Studies</option> <option value="http://learn.library.ryerson.ca/fashion/articles">Fashion</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=504#tabs-504-101">Film Studies</option> <option value="http://learn.library.ryerson.ca/nutrition">Food and Nutrition</option> <option value="http://learn.library.ryerson.ca/french">French</option> <option value="http://learn.library.ryerson.ca/geography">Geography &amp; Spatial Analysis</option> <option value="http://learn.library.ryerson.ca/gerontology">Gerontology</option> <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-3">Graphic Communications Management</option> <option value="http://learn.library.ryerson.ca/c.php?g=270697">Health &amp; Medicine</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=500#tabs-500-101">Health Services Management</option> <option value="http://learn.library.ryerson.ca/history/articles">History</option> <option value="http://learn.library.ryerson.ca/hospitality/scholarly">Hospitality and Tourism</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=503#tabs-503-101">Human Resources Management</option> <option value="http://learn.library.ryerson.ca/immigration/articles">Immigration and Settlement</option>  <option value="http://learn.library.ryerson.ca/ITM/articles">Information Technology Management</option> <option value="http://learn.library.ryerson.ca/rsid">Interior Design</option> <option value="https://library.cf.ryerson.ca/guides/view/?guide=508">International Business and Economics</option> <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-4">Journalism</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=537#tabs-537-101">Law, Canadian</option> <option value="http://learn.library.ryerson.ca/marketing/articles">Marketing</option> <option value="http://learn.library.ryerson.ca/math">Mathematics</option> <option value="http://learn.library.ryerson.ca/mechind">Mechanical &amp; Industrial Engineering</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=761#tabs-761-101">Midwifery &amp; Childbirth</option> <option value="http://learn.library.ryerson.ca/molsci">Molecular Science</option> <option value="http://learn.library.ryerson.ca/multidisciplinary">Multi-Disciplinary</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=512#tabs-512-101">Music</option> <option value="http://learn.library.ryerson.ca/Aboriginal-Topics#s-lib-ctab-3813620-1">Native/Aboriginal Studies</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=513#tabs-513-101">New Media</option> <option value="http://learn.library.ryerson.ca/newspapers">Newspapers</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=122#tabs-122-101">Nursing</option> <option value="http://learn.library.ryerson.ca/nutrition">Nutrition &amp; Food</option> <option value="http://learn.library.ryerson.ca/ohs">Occupational Health and Safety</option> <option value="http://learn.library.ryerson.ca/philosophy/articles">Philosophy</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=517#tabs-517-101">Photographic Preservations</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=518#tabs-518-101">Photography</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=361#tabs-361-101">Physiotherapy</option> <option value="hhttp://learn.library.ryerson.ca/physics">Physics</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=822#tabs-822-101">Politics &amp; Governance</option> <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-5">Professional Communications</option> <option value="http://learn.library.ryerson.ca/psychology">Psychology</option> <option value="http://learn.library.ryerson.ca/ohs">Public Health</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=823#tabs-823-101">Public Policy &amp; Administration</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=522#tabs-522-101">Public Relations</option> <option value="http://learn.library.ryerson.ca/communication/articles#s-lib-ctab-6710914-6">Radio &amp; Television Arts</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=526#tabs-526-101">Retail Management</option> <option value="http://learn.library.ryerson.ca/scitech">Science &amp; Technology Studies</option> <option value="http://learn.library.ryerson.ca/socialsciences ">Social Sciences</option> <option value="http://learn.library.ryerson.ca/socialwork/articles">Social Work</option> <option value="http://learn.library.ryerson.ca/sociology/articles">Sociology</option> <option value="https://library.cf.ryerson.ca/guides/view?guide=528#tabs-528-101">Spanish</option> <option value="http://learn.library.ryerson.ca/geography">Spatial Analysis</option> <option value="http://learn.library.ryerson.ca/theatre">Theatre</option> <option value="http://learn.library.ryerson.ca/planning">Urban &amp; Regional Planning</option> 
 </select>
 </div>
 <div style="clear:both;font-size:12px;padding-top:5px;">or <a href="http://library.ryerson.ca/articles/indexes_title/">Browse A-Z Databases List</a></div>
<div style="clear:both;"></div>
 </div>
 </form>
 </li>
 <!--  More Tab Content --> 
 <li id="s_tab-search5">
 <div class="s_tab_wrap" style="text-align:center;">
 <a href="http://digitalcommons.ryerson.ca/" class="moreLinks" data-ga-event="Homepage,Tab,IR">Digital Commons</a>
  <a href="http://minisis.library.ryerson.ca/m2a/" class="moreLinks" data-ga-event="Homepage,Tab,ASC">Archives &amp; Special Collections</a>
  <a href="https://library.cf.ryerson.ca/madar/geospatial/libdata/by_keyword.cfm" class="moreLinks" data-ga-event="Homepage,Tab,GIS">GIS Data</a>
<a href="http://library.ryerson.ca/services/av/search/" class="moreLinks" data-ga-event="Homepage,Tab,Videos">Videos</a>
 </div>
 </li>
  </ul>
  </div>
 </div>
 <!-- End Of Search Tabs --> 