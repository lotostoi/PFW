<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="btCommentsBox">

	<?php if ( have_comments() ) : ?>

                <h4>
                        <?php
                                printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'denticare' ), number_format_i18n( get_comments_number() ), get_the_title() );
                        ?>
                </h4>

                <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
                        <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                                <?php 
                                $prev_html = get_previous_comments_link( esc_html__( 'Older Comments', 'denticare' ) );
                                $next_html = get_next_comments_link( esc_html__( 'Newer Comments', 'denticare' ) );
                                if ( $prev_html != '' && $next_html != '' ) {
                                        echo get_previous_comments_link( esc_html__( 'Older Comments', 'denticare' ) );
                                        echo '<span></span>';
                                        echo get_next_comments_link( esc_html__( 'Newer Comments', 'denticare' ) );
                                } else {
                                        echo get_previous_comments_link( esc_html__( 'Older Comments', 'denticare' ) );
                                        echo '<span></span>';
                                        echo get_next_comments_link( esc_html__( 'Newer Comments', 'denticare' ) );
                                }
                                ?>
                        </nav><!-- #comment-nav-above -->
                <?php endif; // Check for comment navigation. ?>

                <ul class="comments">
                        <?php
                                wp_list_comments( array(
                                        'style'      => 'ul',
                                        'short_ping' => true,
                                        'callback'   => 'boldthemes_theme_comment'
                                ) );
                        ?>
                </ul><!-- .comments -->

                <?php if ( ! comments_open() ) : ?>
                        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'denticare' ); ?></p>
                <?php endif; 

	endif; // have_comments() 
	
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
	
		$fields =  array(
			'author' =>
				'<div class="pcItem btCommentAuthor"><label for="author">' . esc_html__( 'Name', 'denticare' ) . ( $req ? '<span class="required" title="' . esc_attr__( 'Required field', 'denticare' ) . '">*</span>' : '' ) . '</label>
				<p><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" placeholder="' . esc_attr__( 'Name', 'denticare' ) . ( $req ? ' *' : '' ) . '" ' . $aria_req . ' /></p></div>',

			'email' =>
				'<div class="pcItem btCommentEmail"><label for="email">' . esc_html__( 'Email', 'denticare' ) . ( $req ? '<span class="required" title="' . esc_attr__( 'Required field', 'denticare' ) . '">*</span>' : '' ) . '</label>
				<p><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" placeholder="' . esc_attr__( 'Email', 'denticare' ) . ( $req ? ' *' : '' ) . '" ' . $aria_req . ' /></p></div>',

			'url' =>
				'<div class="pcItem btCommentWebsite"><label for="url">' . esc_html__( 'Website', 'denticare' ) . '</label>' .
				'<p><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website', 'denticare' ) . '" /></p></div>',
		);
	
		$args = array(
		  'id_form'           => 'commentform',
		  'id_submit'         => 'submit',
		  'title_reply'       => esc_html__( 'Leave a Reply', 'denticare' ),
		  'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'denticare' ),
		  'cancel_reply_link' => esc_html__( 'Cancel Reply', 'denticare' ),
		  'label_submit'      => esc_html__( 'Post Comment', 'denticare' ),
		  
		  'submit_button' => '<span class="pcItem"><button type="submit" value="' . esc_attr__( 'Post Comment', 'denticare' ) . '" id="btSubmit" class="btCommentSubmit" name="submit" data-ico-fa="&#xf1d8;"><span class="btnInnerText">' . esc_html__( 'Post Comment', 'denticare' ) . '</span></button></span>',

		  'comment_field' =>  '<div class="pcItem btComment"><label for="comment">' . _x( 'Comment', 'noun', 'denticare' ) .
			'<span class="required" title="' . esc_attr__( 'Required field', 'denticare' ) . '">*</span></label><p><textarea id="comment" name="comment" cols="30" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Comment', 'denticare' ) .	' *">' .
			'</textarea></p></div>',

		  'must_log_in' => '<p class="must-log-in">' .
			sprintf(
				wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'denticare' ), array( 'a' => array( 'href' => array() ) ) ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

		  'logged_in_as' => '<p class="logged-in-as">' .
			sprintf(
				wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="%4$s">%5$s</a>', 'denticare' ), array( 'a' => array( 'href' => array() ) ) ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ),
                                esc_attr__( 'Log out of this account', 'denticare' ),
                                esc_html__( 'Log out?', 'denticare' )
			) . '</p>',

		  'comment_notes_before' => '<p class="comment-notes">' .
			esc_html__( 'Your email address will not be published.', 'denticare' ) . ' ' . ( $req ? esc_html__( 'Required fields are marked *', 'denticare' ) : '' ) .
			'</p>',

		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		);
		comment_form( $args );
	?>

</div><!-- #comments -->
