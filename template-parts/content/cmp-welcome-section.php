<?php 
    $ws_title       = get_sub_field("ws_title"); 
    $ws_content     = get_sub_field("ws_content");
    $ws_title_tag   = get_sub_field("ws_title_tag");
?>
<div class="comp-welcome-section">
    <div class="section-inner">
        <?php if($ws_title){?> 
                <?php echo"<".$ws_title_tag." class='welcome-section-title'>".$ws_title."</".$ws_title_tag.">" ?>
        <?php } ?>
        <?php if($ws_content){?>
            <div class="welcome-section-para">
                <?php echo $ws_content; ?>
            </div>
        <?php } ?> 
     
    </div>
</div>