<!--Library News Feed-->
<?php 
  /* 
   *  Takes the RSS entry and formats it as a link
   */
  function the_rss_link($entry) {
    echo "<a href=\"$entry->link\">$entry->title</a>";
  }

  /* 
   *  Takes the date of the RSS entry and formats it like "Novenber 25, 2015"
   */
  function the_rss_date($entry) {
    $timestamp = strtotime($entry->pubDate);
    $date = date('F j, Y', $timestamp);
    echo "<p class=\"pubdate\">$date</p>";
  }

  /* 
   *  Takes the description of the RSS entry and formats it as a paragraph
   */
  function the_rss_description($entry) {
    echo "<p>$entry->description</p>";
  }

  $url = 'http://apps.library.ryerson.ca/api/merge/';
  $xml = new SimpleXmlElement( file_get_contents($url) );
  $rss = $xml->channel;
?>

<section class="entry-content libnews">
  <h2>
    <a href="http://library.ryerson.ca/blog/">Library News</a>
    <a href="http://apps.library.ryerson.ca/api/merge/" data-ga-event="Homepage,SocialMedia,RSS">
      <img class="rss-icon noborder" src="<?php bloginfo('template_directory'); ?>/img/social-icons/32x32%20PNG/32-rss.png" alt="Subscribe to news feed">
    </a>
  </h2>

  <?php foreach($rss->item as $entry) : ?>
    <article class="rss-item">
      <h1><?php the_rss_link($entry); ?></h1>
      <section>
        <?php the_rss_date($entry); ?>
        <?php the_rss_description($entry); ?>
      </section>
    </article>
  <?php endforeach; ?>
</section>