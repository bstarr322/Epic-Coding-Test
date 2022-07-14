<?php 
/*
  Template Name: Contact Us
*/

get_header();

// Dummy Forms for now
$forms = ['sales', 'support', 'billing'];

// Locations Data
$locationsData = [];
$locations = get_field('locations', $post->ID);
if (!empty($locations)) {
  foreach ($locations as $locationObject) {
    $location_image = get_field('location_image', $locationObject->ID);
    $locationsData[] = [
      'title' => $locationObject->post_title,
      'content' => $locationObject->post_content,
      'image' => $location_image
    ];
  }
}
?>

	<main id="primary" class="site-main template-page template-page--contact-us">
		<div class="container page__inner">
      
      <div class="page__header">
        <h1 class="page__title"><?= get_the_title(); ?></h1>
        <div class="page__description"><?php the_content() ?></div>
      </div>

      <?php if (!empty($forms)) : ?>
        <!-- Form Tabs -->
        <div class="page__contact-forms">
          <ul class="nav nav-tabs" role="tablist">
            <?php foreach($forms as $i => $type) : ?>
              <li class="nav-item" role="presentation">
                <button class="nav-link <?= $i === 0 ? 'active' : '' ?>" id="tab-<?= $type ?>"
                  data-toggle="tab" type="button" role="tab"
                  aria-controls="<?= $type ?>"
                  aria-selected="true"><?= $type ?></button>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="tab-content">
            <?php foreach($forms as $i => $type) : ?>
              <div class="tab-pane fade show <?= $i === 0 ? 'active' : '' ?>" id="<?= $type ?>" role="tabpanel" aria-labelledby="<?= $type ?>-tab">
                <div class="tab-content-infos">
                  <div class="tab-content__info">
                    <label>Sales Phone</label>
                    <span class="font-weight-bold">844-374-2883</span>
                  </div>
                  <div class="tab-content__info">
                    <label>Email</label>
                    <span class="font-weight-bold">sales@epicvue.com</span>
                  </div>
                </div>

                <?php get_template_part('/resources/components/contact-form'); ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- /Form Tabs -->
      <?php endif; ?>

      <?php if (!empty($locationsData)) : ?>
        <!-- Locations -->
        <div class="locations">
          <?php
            foreach ($locationsData as $location) {
              set_query_var('location', $location);
              get_template_part('/resources/components/location-card');
            }
          ?>
        </div>
        <!-- /Locations -->
      <?php endif; ?>
		</div>
	</main>

<?php
get_footer();
?>
