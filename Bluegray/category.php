<?php get_header(); ?>

    <!-- main开始 -->
    <section class="category-body">
        <div class="category-main clearfix">
            <section class="category-article fl">
                <div class="category-crumb">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
                <section class="article-list clearfix">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail() ?></a>
                        <div class="con">
                            <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                            <p class="time">
                                <span><?php the_time('y-m-d H:i') ?></span>
                                <span class="fa fa-comment">&nbsp;<?php comments_popup_link('0', '1', '%', '', '评论已关闭'); ?></span>
                                <span class="fa fa-eye">&nbsp;<?php echo getPostViews(get_the_ID()); ?></span>
                            </p>
                            <?php the_excerpt(); ?>
                            <p class="review"><a href="<?php the_permalink(); ?>" rel="bookmark">阅读全文</a></p>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
                        <p>没有找到任何文章！</p>
                    <?php endif; ?>
                </section>
                <?php wp_pagenavi(); ?>
            </section>
            <?php get_sidebar(); ?>
        </div>
    </section>
    <!-- main结束 -->

    <?php get_footer(); ?>
</body>
</html>
