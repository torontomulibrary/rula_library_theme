<?php 
  // Fetch JSON data
  $json_source_url = 'http://apps.library.ryerson.ca/api/titles_feed/fetch_json.php';
  $json = file_get_contents( $json_source_url );
  $data = json_decode($json, true);
?>
<section class="card" style="margin-top: 0.5em">
  <header class="card-header">
    <h2>Featured Titles</h2>
  </header>
  <article class="card-content">
    <div class="slick">
      <?php foreach($data['TITLES'] as $title) : ?>
        <div>
          <img src="<?php echo $title['IMAGE'] ?>">
          <!-- <img data-lazy="<?php echo $title['IMAGE'] ?>"> -->
        </div>
      <?php endforeach; ?>
    </div>
  </article>
</section>