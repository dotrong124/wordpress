<?php get_header(); ?>


<div class="row page-wrapper" style="min-height: 500px;">
  <div class="banner-inner fill" style="min-height: 0;">
    <div class="banner-bg fill">
      <img fetchpriority="high" decoding="async" width="1020" height="496" src="/wp-content/uploads/2024/12/engineering-the-extraordinary-life-1.avif" class="bg attachment-large size-large" alt="">
      <!-- <div class="overlay"></div> -->
    </div>

    <div class="banner-layers container">

    </div>
  </div>
  <div id="content" class="large-12 col" role="main">

    <h1 class="my-title">Hướng Dẫn Sử Dụng</h1>

    <form method="get" action="<?php echo esc_url(home_url('/huong-dan-su-dung2')); ?>" class="my-search-form">
      <input type="text" name="s" class="search-field mb-0" placeholder="Tìm kiếm ..." value="<?php echo get_search_query(); ?>">
      <input type="hidden" name="post_type" value="huong-dan-su-dung2">
      <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary  icon mb-0" aria-label="Gửi">
        <i class="icon-search"></i> </button>
    </form>

    <?php
    if (is_search() && get_search_query()) : ?>
      <div class="search-results">
        <h2>Kết quả tìm kiếm cho: "<?php echo get_search_query(); ?>"</h2>
        <?php
        // Kiểm tra nếu có bài viết phù hợp
        if (have_posts()) :
          while (have_posts()) : the_post();
            $pdf_file = get_field('pdf_file'); ?>
            <div class="post">
              <?php
              if ($pdf_file): ?>
                <h3><a href="<?php echo esc_url($pdf_file); ?>"><?php the_title(); ?></a></h3>
              <?php endif;
              ?>
              <p><?php the_excerpt(); ?></p>
            </div>
          <?php endwhile; ?>

        <?php endif; ?>
      </div>
    <?php else : ?>
      <p></p>
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>