<div>
	<div class="comments-wrap">
		<h3 class="cook-comments-title"><?php printf( _nx( 'One person responded to &ldquo;%2$s&rdquo;:', '%1$s people responded to &ldquo;%2$s&rdquo;:', get_comments_number(), 'comments title', 'ironglove' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3>
		<div class="comment-body">
			<?php wp_list_comments( array(
					'max_depth' => '4',
					'style' => 'ol',
					'type' => 'comment',
					'avatar_size' => '40',
					'format' => 'html5'
			) ); ?>
		</div>
		<?php comment_form(); ?>
	</div>
</div>