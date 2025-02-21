<?php 
    $cic_image          = get_sub_field("cic_image");
    $cic_image_url      = validateImage(565,590,$cic_image);
    $ciw_title_tag      = get_sub_field("ciw_title_tag");
    $ciw_title          = get_sub_field("ciw_title");
    $ciw_paragrapgh     = get_sub_field("ciw_paragrapgh");
    $ciw_link_url       = get_sub_field("ciw_link_url");
    $ciw_link_text      = get_sub_field("ciw_link_text");
    $ciw_text_first     = get_sub_field("ciw_text_first");
    $ciw_tagline        = get_sub_field("ciw_tagline");
    if($ciw_text_first=="1"){
        $ciw_text_first_class = "text-first";
    }
    else{
        $ciw_text_first_class = "";
    }
?>

<div class="comp-img-content-section <?php echo $ciw_text_first_class; ?>">
    <div class="section-inner">
        <div class="img-wrap">
            <img src="<?php echo $cic_image_url; ?>">
        </div>
        <div class="content-wrap"> 
            <?php if($ciw_tagline){ ?>
                <p class="content-wrap-tagline"><?php echo $ciw_tagline; ?></p>  
            <?php } ?>
            <?php if($ciw_title){   ?>
                <?php echo "<".$ciw_title_tag." class='content-tagline'>".$ciw_title."</".$ciw_title_tag.">" ?>
            <?php } ?>

            <?php if($ciw_paragrapgh){   ?>
                <div class="content-wrap-text">
                    <?php echo $ciw_paragrapgh; ?>
                </div>
            <?php } ?> 

            <?php if($ciw_link_url){   ?>
                <div class="btn underline">
                    <a href="<?php echo $ciw_link_url; ?>" class="content-link"><?php echo $ciw_link_text; ?></a>
                </div>
            <?php } ?>  

        </div>
    </div>
</div>