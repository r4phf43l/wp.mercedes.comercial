<?php get_header();  
$acat = single_cat_title("", false) ? strtolower(single_cat_title("", false)) : get_theme_mod('mcbra_models_cat_default');
$acat = (strpos($acat, 'autom')) ? 'automoveis' : $acat;
$acat = (strpos($acat, 'nibus')) ? 'onibus' : $acat;
$acat = (strpos($acat, 'camin')) ? 'caminhoes' : $acat;  
$cat = array( 'automoveis' => 1, 'onibus' => 2, 'vans' => 3, 'amg' => 4, 'caminhoes' => 5);
$c = $cat[$acat];      
$dt = array ( 1 => 'Novidades', 2 => 'Serviços', 3 => 'Notícias' );
?>
        
<div class='home_slider'>
    <?php get_template_part( 'slider' ); ?>
    <div class='home_thumbs<? if (get_theme_mod('mcbra_pages_setting')==1) { echo " alle-active";} ?>'>
    	<?php get_template_part( 'pages' ); ?>
	<?php get_template_part( 'teaser' ); ?>        
        <div style='clear:both'></div>
    </div>
</div>
<div>
    
<? for($i=1;$i<4;$i++) { ?>    
    <div class="sidebar sidebar-home" id="sidebar-block<?=$i?>">
        <h2>
            <?=((get_theme_mod('mcbra_block_setting_'.$i)!='') ? get_theme_mod('mcbra_block_setting_'.$i) : $dt[$i])?>
        </h2>      
	<?php if ( is_active_sidebar( 'block'.$c.$i ) ) : ?>
	<?php dynamic_sidebar( 'block'.$c.$i ); ?>
	<?php endif; ?>
    </div>
<? } ?>
    
	<div style="clear:both"></div>
</div>
<?php get_footer(); ?>