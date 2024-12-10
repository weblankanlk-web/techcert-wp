
<?php 
    $sss_title_tag              = get_sub_field("sss_title_tag");
    $sss_stick_wrapper_title    = get_sub_field("sss_stick_wrapper_title");
    $sss_stick_wrapper_content  = get_sub_field("sss_stick_wrapper_content");
    $sss_card_listing           = get_sub_field("sss_card_listing"); 
?>

<div class="cmp-sticky-content-slider">
    <div class="section-inner">  
        <div class="ss-card-sticky-content">
        <?php
            if($sss_stick_wrapper_title){
                echo "<".$sss_title_tag." class='stiky-title'>".$sss_stick_wrapper_title."</".$sss_title_tag.">"; 
            }
        ?>    

        <?php
            if($sss_stick_wrapper_content){
        ?>
            <div class="sss_content">
                <?php echo $sss_stick_wrapper_content; ?>
            </div>

        <?php
            }
        ?>
        </div>
        <div class="ss-card-slider-wrap">
            <div class="ss-card-slider">
        <?php 
        if($sss_card_listing){
        foreach( $sss_card_listing as $sss_card_item){ 
            $sss_card_title             = $sss_card_item["sss_card_title"];
            $sss_card_content           = $sss_card_item["sss_card_content"];
        ?> 

            <div class="sss-card-item">
                <?php if($sss_card_title){ ?>
                    <h3 class="sss-card-title">
                        <?php echo $sss_card_title; ?>
                    </h3>
                <?php } ?>
                <?php if($sss_card_content){ ?>
                    <div class="sss-card-content">
                        <?php echo $sss_card_content; ?>
                    </div>
                <?php } ?>
            </div> 
            
        <?php
                }  
                
            }
        ?>
            </div>
        </div>
    </div>
</div>