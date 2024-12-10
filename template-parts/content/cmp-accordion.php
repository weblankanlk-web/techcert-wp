
<?php $acc_accordion_list = get_sub_field("acc_accordion_list");?>

<div class="cmp-accordion">
    <div class="section-inner"> 

        <?php foreach($acc_accordion_list as $acc_accordion_item){ 
            $acc_accordion_heading      = $acc_accordion_item["acc_accordion_heading"];
            $acc_accordion_desctription = $acc_accordion_item["acc_accordion_desctription"];
        ?> 

            <div class="accordion-item">
                <div class="accordion-head">
                    <?php echo $acc_accordion_heading; ?>
                </div>
                <div class="acccordion-body">
                    <?php echo $acc_accordion_desctription; ?>
                </div>
            </div> 
            
        <?php
        }    
        ?>
    </div>
</div>