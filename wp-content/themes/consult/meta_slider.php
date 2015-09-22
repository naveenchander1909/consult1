<?php
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
  add_meta_box( 'my-meta-box-id', 'Link to Project', 'cd_meta_box_cb', 'slider', 'normal', 'high' );
}

function cd_meta_box_cb( $post )
{
  $url = get_post_meta($post->ID, 'url', true);
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' ); ?>

<p>
  <label for="url">Project url</label>
  <input type="text" name="url" id="url" value="<?php echo $url; ?>" style="width:350px" />
</p>

<?php
}

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post' ) ) return;

  // now we can actually save the data
  $allowed = array(
    'a' => array( // on allow a tags
      'href' => array() // and those anchors can only have href attribute
    )
  );

  // Probably a good idea to make sure your data is set
  if( isset( $_POST['url'] ) )
    update_post_meta( $post_id, 'url', wp_kses( $_POST['url'], $allowed ) );
}

?>

