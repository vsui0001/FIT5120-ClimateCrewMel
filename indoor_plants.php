// fetch the details from the database table

<?php
global $wpdb;
$result = $wpdb->get_results ( "SELECT * FROM wp_refinedplants WHERE plant_place='Indoor Plant'");
$i=0;
?>

// create a table

    <table class='tab'>
    

// for each result

        <?php foreach ( $result as $print )
        {
        
if ($i%3==0){ ?>

// create a table with 3 columns

<tr> <td width='33%'></td> <td width='33%'></td> <td width='33%'></td></tr>
        <tr>
            <?php } ?>
            <td>
            
 // create a card with specific dimensions
            
<div class="card" style="width: 30rem; height: 35rem; background-color: white">

<div class="card-header" style="background-color: #b4f2a9">
   <h1><?php echo $print->comman_name;?></h1>
  </div>

// content for the card to be filled in with the details from the database

<li class="list-group-item" style="width: 100%">
  <span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 18px" > <?php echo $print->plant_type;?></span>
<p><p/>
<p> <?php echo $print->sow_instructions;?></p>
<p>Maintenance: <?php echo $print->maintenance;?><p/>
<p><p/>
<p></p>
<i class="fas fa-arrows-alt-v"></i>
<span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 16px" > <?php echo $print->height_ranges;?> </span>
<p></p>
 <i class="fas fa-arrows-alt-h"></i> 
<span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 16px" > <?php echo $print->spread_ranges;?>
 </span>
<p></p>
<i class="fas fa-fill-drip"></i>
<span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 16px" > <?php echo $print->water_needs;?> </span>
<p></p>
<i class="fas fa-sun"></i>
<span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 16px" > <?php echo $print->light_needs;?></span>
<p></p>
<i class="fab fa-pagelines"></i>
<span style= "color: #848484; font-family: 'Open Sans', sans-serif; font-size: 16px" ><?php echo $print->plant_place;?>
</span>
</li>
</div>
            </td>
        <?php
            if($i%3==2)
            {?>

        </tr>
        <?php }
        $i++;
        } ?>
    </table>

// css

<style>

    table, th, td {
        border: None;
    }

    input {
        border: 1px solid #000000;
    }
</style>"
