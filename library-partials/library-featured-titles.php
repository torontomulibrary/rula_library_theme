<?php 
  /* 
   *  Takes the RSS entry and formats it as a link
   */
  function the_book_title($featured_book) {
    $link_to = $featured_book['URL'];
    $img_src = $featured_book['IMAGE'];
    $img_alt = $featured_book['TITLE'];
    // echo "<a href=\"$link_to\"><img data-lazy=\"$img_src\" alt=\"$img_alt\"></a>";
    echo "<a href=\"$link_to\"><img src=\"$img_src\" alt=\"$img_alt\"></a>";
  }

  /* 
   *  Takes the RSS entry and formats it as a link
   */
  function the_featured_title($data) {
    $title = $data['FEATURED']['FEATURED_TITLE'];
    $link_to = $data['FEATURED']['FEATURED_URL'];
    echo "<a href=\"$link_to\">Featured: $title</a>";
  }

  // Fetch JSON data
  $json_source_url = 'http://apps.library.ryerson.ca/api/titles_feed/fetch_json.php';
  $json = file_get_contents( $json_source_url );
  $data = json_decode($json, true);
?>

<section class="featured-titles card" style="margin-top: 0.5em">
  <header class="card-header">
    <h2><?php the_featured_title($data); ?></h2>
  </header>

  <article class="card-content">
    <div class="featured-slider">
      <?php foreach($data['TITLES'] as $featured_book) : ?>
        <div>
          <?php the_book_title($featured_book); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>