<?php
get_header();
?>
    <nav id="graphic" class="graphic">
        <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic1.png"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic2.png"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/graphic3.png"></li>
        </ul>
    </nav>
    <div class="contents">
        <main>
            <section class="news">
                <h2>お知らせ</h2>
                <ul>
                    <?php
                    if(have_posts()):while(have_posts()):the_post();?>
                        <li>
                            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                            <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?></a>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
            </section>
        </main>
        <?php get_sidebar(); ?>
    </div>

<?php
get_footer();