<?php

function kickflow_options_page()
{
  // get kickflow widget status
  $option = get_option('kickflow_settings');
  if($option['status'] == "disabled" || !$status){
    $name = "kickflow-enable";
    $status = "Enable";
  }else
  {
    $name = "kickflow-disable";
    $status = "Disable";
  }
  $pages = get_pages();
  $page_ids = $option['kickflow_pages'];
?>  
  <style type="text/css">
    .note {
    color: green;
    width: 100%;
    display: inline-block;
    margin: 10px 0px;
    }

    .danger
    {
      color: red;
    }
    .pages
    {
      width: 120px;
      height: 50px;
    }
  .pages {
      width: 200px !important;
      height: 200px !important;
  }

  </style>

  <br>
  <br>
  <form name="kickflow-form" action="options.php" method="post" enctype="multipart/form-data">
   <?php settings_fields( 'kickflow_settings_group' ); ?>
  <textarea name = "kickflow_settings[kickflow_installation_code]" placeholder="kickflow js code" style="width: 100%; min-height: 200px"><?php echo $option['kickflow_installation_code'] ?></textarea> 
  <span class = "note" >* can be found in your account under guide > setup > javascript</span>
  <div >
  <div class = "pages-cont" >
    <p><strong> Run widget on pages </strong></p>
    <select name = "kickflow_settings[kickflow_pages][]" multiple="true" class = "pages" >
      <option value = "-1" <?php if(in_array(-1, $page_ids) || sizeof($page_ids) == 0) echo "selected"; ?> >All pages</option>
      <?php foreach($pages as $page){ ?>

        <option value = "<?php echo $page->ID ?>" <?php if(in_array($page->ID, $page_ids)) echo "selected"; ?> ><?php echo $page->post_title?></option>

      <?php } ?>

    </select>
    <span class = "note" >* for multiple selection press shift and then select the option</span>

  </div>
            <p class="submit">
                <?php echo submit_button('Save Changes'); ?>
            </p>
  </div>
  </form>
<?php
}
?>
