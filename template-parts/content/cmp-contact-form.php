<?php 
    $cw_form            = get_sub_field("cw_form");
    $cw_contact_items   = get_sub_field("cw_contact_items");
?>
<div class="cmp-contact-form">
    <div class="section-inner"> 
       
        <div class="contact-details-warpper">
             <?php 
                if($cw_contact_items){
                    foreach($cw_contact_items as $cw_item){
                        $cw_label   = $cw_item["cw_label"];
                        $cw_value   = $cw_item["cw_value"];
                        $cw_icon    = $cw_item["cw_icon"];
                        $cw_icon_url= validateImage(30,30,$cw_icon);
                        ?>
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <img src="<?php echo $cw_icon_url; ?>">
                                </div>
                                <div class="contact-content">
                                    <div class="label">
                                        <?php echo $cw_label; ?>
                                    </div>
                                    <div class="value">
                                        <?php echo $cw_value; ?>
                                    </div>
                                </div>
                            </div>

                        <?php 
                    }
                }
             ?>   
        </div>
        <div class="form-wrap">
            <?php 
                if($cw_form){
                    echo $cw_form;
                }
            ?>
        </div>
    </div>
</div>