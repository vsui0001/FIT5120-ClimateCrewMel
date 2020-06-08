<?php
global $wpdb;
global $result; 
$ID = $_GET['ID']; 

if (empty($ID))
{
 $result = $wpdb->get_results ( "SELECT * FROM wp_final_list WHERE plantposition <> 'Place in balcony or garden' ");
}
else{
 $result = $wpdb->get_results ( "SELECT * FROM wp_final_list where Recyclable_items like '%$ID%' and plantposition <> 'Place in balcony or garden' ");
}
foreach ( $result as $print )
        {?>       
<br>

<div class="card mb-5" style="max-width: 875px;border:solid; padding:20px; background: #c6ecd7; shadows: 2; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
  <div class="row no-gutters">
    <div class="col-md-5">
<img src=<?php echo $print->Image;?> style="width:300px; height: 235px">  
    </div>
    <div class="col-md-16">
      <div class="card-body">
        <h2 class="card-title"><?php echo $print->CommonName;?>
</h2>
<br>
<img src="https://img.icons8.com/android/20/000000/plant-under-sun.png"/>
        <span class="card-text">Type: <?php echo $print->PlantType ;?></span>
<br>
<i class="fas fa-fill-drip"; style='font-size:20px;'></i>
       <span class="card-text"> <?php echo $print->WaterNeeds;?></span>
<br>

<img src="https://img.icons8.com/ios-filled/25/000000/flower.png"/>
<span class="card-text"><?php echo $print->Flowercolour ;?>
</span>
<br>
<img src="https://img.icons8.com/ios/25/000000/potted-plant.png"/>
 <span class="card-text"><a href="https://www.climatecrew.live/reusable-items-instructions/">Plant in <?php echo $print->Recyclable_items;?> </a>
</span>
      </div>
    </div>
  </div>
</div>

<?php }?>

<style>
.card-text{
color: #476b6b;
font-size: 19px}

a{color: blue;
text-decoration: underline;}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>
