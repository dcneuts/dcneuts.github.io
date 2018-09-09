<?php
get_header( 'front-page' ); ?>

            <section class="margin-bottom60">
                <?php $difflevel = get_field('level'); ?>
                <script>
					   $(function() {
						   // Difficulty Slider
						   $('#difficulty').jQMeter({
							   goal: '10',
							   raised: '<?php print_r(the_field("level")); ?>',
							   width: '100%',
							   height: '35px'
						   });
					   });
				   </script>
                <div class="container">
                    <div class="row margin-top45">
                        <div class="col-md-9">
                            <h1 class="text-center recipe-postname sienna"><?php the_title(); ?></h1>
                            <div class="row">
                                <div class="col-xs-12 col-md-6 recipe-image">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'medium-square', array(
                                        	'class' => 'recipe-mainimage img-responsive',
                                        	'alt' => __( 'Main photograph of prepared recipe.', 'cookalong_podcast' )
                                        ) );
                                        }
                                     ?>
                                </div>
                                <div class="col-xs-12 col-md-5" id="recipe-topinfo">
                                    <p class="recipe-postdesc"><?php echo get_field( 'recipe_description' ); ?></p>
                                    <?php echo get_field( 'podcast_link' ); ?>
                                    <p class="mob-notice"><?php _e( 'On mobile? Click &quot;Listen in browser&quot;.', 'cookalong_podcast' ); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 level-block">
                                    <h4 class="recipe-subhead"><?php _e( 'Difficulty Level', 'cookalong_podcast' ); ?></h4>
                                    <div id="difficulty">
</div>
                                    <p class="pull-left diff-left"><?php _e( 'Easy', 'cookalong_podcast' ); ?></p>
                                    <p class="pull-right diff-right"><?php _e( 'Hard', 'cookalong_podcast' ); ?></p>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12 inline-block margin-top30">
                                    <?php
									$handling = get_field('special_handling');
									if($handling) : ?>
                                    <p class="special-handling"><?php _e( 'Special Handling:', 'cookalong_podcast' ); ?> <span class="feature-yes"><?php foreach($handling as $specialHandling) : ?><?php echo $specialHandling; ?></span><?php endforeach; ?></p>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1" id="recipe-body">
                                    <h2 class="recipe-section text-center sienna"><?php _e( 'Needed Items', 'cookalong_podcast' ); ?></h2>
                                    <div class="col-sm-6">
                                        <h4 class="recipe-subhead"><?php _e( 'Durations', 'cookalong_podcast' ); ?></h4>
                                        <ul class="recipe-liststyle" id="recipe-durations">
                                            <li class="recipe-lineitem">
                                                <?php echo get_field( 'durations' ); ?>
                                            </li>
                                        </ul>
                                        <h4 class="recipe-subhead"><?php _e( 'Ingredients', 'cookalong_podcast' ); ?></h4>
                                        <ul class="recipe-liststyle" id="recipe-ingredients">
                                            <li class="recipe-lineitem">
                                                <?php echo get_field( 'ingredients' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="recipe-subhead"><?php _e( 'Number of Servings', 'cookalong_podcast' ); ?></h4>
                                        <ul class="recipe-liststyle" id="recipe-servingsize">
                                            <li class="recipe-lineitem">
                                                <?php echo get_field( 'serving_size' ); ?>
                                            </li>
                                        </ul>
                                        <h4 class="recipe-subhead"><?php _e( 'Equipment', 'cookalong_podcast' ); ?></h4>
                                        <ul class="recipe-liststyle" id="recipe-equipment">
                                            <li class="recipe-lineitem">
                                                <?php echo get_field( 'equipment' ); ?>
                                            </li>
                                        </ul>
                                        <h4 class="recipe-subhead"><?php _e( 'Do-Aheads', 'cookalong_podcast' ); ?></h4>
                                        <ul id="recipe-doaheads">
                                            <li class="recipe-lineitem">
                                                <?php echo get_field( 'do-aheads' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="recipe-images">
                                    <div class="col-sm-4 recipe-image-grid">
                                        <?php if ( get_field('recipe_image_1') ) : ?>
                                            <img src="<?php the_field('recipe_image_1'); ?>" class="img-responsive">
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 recipe-image-grid" id="acf-img-2">
                                        <?php if ( get_field('recipe_image_2') ) : ?>
                                            <img src="<?php the_field('recipe_image_2'); ?>" class="img-responsive">
                                        <?php elseif (empty(get_field('recipe_image_2'))) : ?>
                                            <?php echo "<script type='text/javascript'>jQuery('div#acf-img-2').remove();</script>" ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 recipe-image-grid" id="acf-img-3">
                                        <?php if ( get_field('recipe_image_3') ) : ?>
                                            <img src="<?php the_field('recipe_image_3'); ?>" class="img-responsive">
                                        <?php elseif (empty(get_field('recipe_image_3'))) : ?>
                                            <?php echo "<script type='text/javascript'>jQuery('div#acf-img-3').remove();</script>" ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 recipe-image-grid" id="acf-img-4">
                                        <?php if ( get_field('recipe_image_4') ) : ?>
                                            <img src="<?php the_field('recipe_image_4'); ?>" class="img-responsive">
                                        <?php elseif (empty(get_field('recipe_image_4'))) : ?>
                                            <?php echo "<script type='text/javascript'>jQuery('div#acf-img-4').remove();</script>" ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 recipe-image-grid" id="acf-img-5">
                                        <?php if ( get_field('recipe_image_5') ) : ?>
                                            <img src="<?php the_field('recipe_image_5'); ?>" class="img-responsive">
                                        <?php elseif (empty(get_field('recipe_image_5'))) : ?>
                                            <?php echo "<script type='text/javascript'>jQuery('div#acf-img-5').remove();</script>" ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 recipe-image-grid" id="acf-img-6">
                                        <?php if ( get_field('recipe_image_6') ) : ?>
                                            <img src="<?php the_field('recipe_image_6'); ?>" class="img-responsive">
                                        <?php elseif (empty(get_field('recipe_image_6'))) : ?>
                                            <?php echo "<script type='text/javascript'>jQuery('div#acf-img-6').remove();</script>" ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12" id="recipe-notes">
                                    <h2 class="recipe-notes text-center sienna"><?php _e( 'Additional Notes', 'cookalong_podcast' ); ?></h2>
                                    <p class="additional-notes"><?php echo get_field( 'recipe_notes' ); ?></p>
                                    <?php $blog_link = get_field('blog_link');
									if($blog_link) : ?>
                                    <a href="<?php the_field('blog_link') ?>"><p class="blog-link"><?php _e( 'Read the blog about this recipe', 'cookalong_podcast' ); ?></p></a>
                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 social-share">
                                    <div>
                                        <?php echo do_shortcode('[Sassy_Social_Share align="center" total_shares="on" count="1" title="Share my content with your friends!"]') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="aside-grid">
                            <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
                                <div class="col-sm-6 col-md-3" id="primary-sidebar">
                                    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
                                </div>
                            <?php endif; ?>
                        </aside>
                    </div>
                </div>
            </section>            

<?php get_footer( 'front-page' ); ?>