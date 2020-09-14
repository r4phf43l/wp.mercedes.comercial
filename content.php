<?php
$post_tags = get_the_tags();
foreach( $post_tags as $tag) {
    if ( $tag->slug === 'videos') {
        $vid = 1;
    }
} ?>

<?php
if (get_post_thumbnail_id( $post->ID )) :
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$pos_text = ' style="margin-top:262px; padding-top:19px"';	
	$thumbed = ' style="background: #FFF url('.$thumb[0].') no-repeat center top"';
endif
?>

<div class='entry'<?=($vid == 0)?$thumbed:''?>>

<? if ($vid == 0) { ?>
    <div class="widgts-pages">
    <?php get_template_part('sidebar','sidebarpage'); ?>
    </div>
<? } else { ?>
<style>
    <!--
    .entry .entry-container {
        width: calc(100% - 25px);
        border-left: 0;
    }
    article {
        width: 100%;
        position: relative;
        padding: 0;
    }
    -->
</style>
<? } ?>

    <div class="entry-container"<?=($vid == 0)?$pos_text:''?>>
        <div class='entry-header'>
                <h1 class='entry-title'><?php the_title(); ?></h1>
        </div>
        <div class='entry-content'>
            <article>            
                <?php the_content();
                
                //print_r( $post_tags ); ?>               
<?
        $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,             
        ) );
		$i=1;
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
				$chkurl = wp_get_attachment_image_src( $attachment->ID, 'single-post-thumbnail', true );
				if ($chkurl[0] != $thumb[0]) {
					//$class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
					$thumbimg = wp_get_attachment_image_src( $attachment->ID, 'img_gal', true );
					//$ligals .= '<li class="' . $class . ' data-design-thumbnail ' . $chkurl[0] . ' ' . $thumb[0] .'">' . $thumbimg . '</li>';
					$class = ($i % 2 == 0) ? 'par' : 'impar';
					$ligals .= '<li class="'.$class.'" style="background: #FFF url('.$thumbimg[0].') no-repeat center center"></li>';
					$i++;
				}
            }

        }		
?> 
            </article>
        </div>   
    </div>
    <div style="clear:both"></div>
</div>