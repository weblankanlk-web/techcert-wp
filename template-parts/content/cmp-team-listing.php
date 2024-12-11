
<?php 
    $ot_team_listing        = get_sub_field("ot_team_listing");
    $ot_slider_or_listing   = get_sub_field("ot_slider_or_listing");
   
    if($ot_slider_or_listing=="listing"){
        $ot_swap_class = "listing";
    }
    else{
        $ot_swap_class = "team-sliding";
    }
?>

<div class="cmp-team-listing ">
    <div class="section-inner"> 
 
        <div class="team-listing <?php echo $ot_swap_class; ?>">

            <?php if($ot_team_listing){
                    foreach($ot_team_listing as $team_item){ 
                        $team_member        = $team_item["team_member"];
                        $team_member_id     = $team_member->ID;
                        $name               = get_the_title($team_member_id);
                        $ot_position        = get_field("ot_position",$team_member_id);
                        $ot_description     = get_field("ot_description",$team_member_id);
                        $ot_profile_imge    = get_field("ot_profile_imge",$team_member_id);
                        $profile_imge_url   = validateImage(350,350,$ot_profile_imge);
                ?>
                <div class="listing-item">
                    <div class="team-item" data-name="<?php echo $name ?>" data-position="<?php echo $ot_position ?>" data-description="<?php echo $ot_description?>" data-img="<?php echo $profile_imge_url;?>">                        
                        <img src="<?php echo $profile_imge_url; ?>" class="team-img">
                        <div class="team-content">
                            <?php if($name){?>
                                <h2 class="team-name">
                                    <?php echo $name; ?>
                                </h2>
                            <?php } ?>
                            <?php if($ot_position){?>
                                <p class="team-position">
                                    <?php echo $ot_position; ?>
                                </p> 
                            <?php } ?>   
                        </div>
                    </div> 
                </div>
            <?php   } ?>
            <?php } ?>
        </div>
         
    </div>
</div>


<div class="team-modal" id="main-team-modal">
    <div class="modal-content-box">
        <img src="" class="team-modal-img">
        <div class="team-modal-content">
            <div class="modal-close">
                <svg class="closeicon">
                    <use xlink:href="#closeicon"></use>
                </svg>
            </div> 

            <img src="" class="modal-img">
            <div class="modal-content">

            </div> 
                               
        </div>
    </div>
</div>