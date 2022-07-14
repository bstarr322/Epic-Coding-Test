<div class="location-card">
  <?php if (!empty($location['title'])) : ?>
    <h3 class="location-card__title"><?= $location['title'] ?></h3>
  <?php endif; ?>

  <?php if (!empty($location['content'])) : ?>
    <div class="location-card__content"><?= $location['content'] ?></div>
  <?php endif; ?>

  <?php if (!empty($location['image'])) : ?>
    <div class="location-card__image-wrapper">
      <img src="<?= $location['image']['url'] ?>" alt="<?= $location['title'] ?>" />
    </div>
  <?php endif; ?>
</div>
