<?php
  get_header();
  if(have_posts()): while(have_posts()): the_post();
  $headText = get_field('heading_text');
  $headImage = get_field('heading_image');
?>
<header id="header-image" class="animate-parallax animate-z-normal">
  <div class="module-bg"<?php if(!empty($headImage)) { echo 'style="background-image: url(' . $headImage['sizes']['jumbo'] . ');"'; } ?>></div>
  <section class="wrap">
    <?php if(!empty($headText)) { echo '<h1>' . $headText . '</h1>'; } ?>
  </section>
</header>
<?php if(have_rows('section')): ?>
  <article class="page-content wrap">
    <?php while(have_rows('section')): the_row(); ?>
      <section class="page-section">
        <div class="section-left">
          <?php the_sub_field('left_column'); ?>
        </div>
        <?php if(have_rows('right_column')): ?>
          <div class="section-right">
            <?php
              while(have_rows('right_column')) {
                the_row();
                $layout = get_row_layout();
                if($layout == 'gallery') {
                  $gallery = get_sub_field('images');
                  if($gallery) {
                    echo '<ul class="section-gallery">';
                      foreach($gallery as $img) {
                        echo '<li class="gallery-single">';
                          echo '<img src="' . $img['sizes']['thumbnail-medium'] . '" class="gallery-image" alt="Image of ' . $img['title'] . '" />';
                          echo '<span class="gallery-description"><h3>' . $img['title'] . '</h3><p>' . $img['description'] . '</p></span>';
                        echo '</li>';
                      }
                    echo '</ul>';
                  }
                } elseif($layout == 'links_list') {
                  if(have_rows('links')) {
                    echo '<ul class="section-links">';
                      while(have_rows('links')) {
                        the_row();
                        $link =  get_sub_field('link');
                        echo '<li class="link-single">';
                          echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
                          echo '<span class="link-description">' . get_sub_field('description') . '</span>';
                        echo '</li>';
                      }
                    echo '</ul>';
                  }
                } elseif($layout == 'rich_content') {
                  the_sub_field('content');
                }
              }
            ?>
          </div>
        <?php endif; ?>
      </section>
    <?php endwhile; ?>
  </article>
<?php
  endif;
  endwhile; endif;
  get_footer();
?>
