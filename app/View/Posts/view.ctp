<!-- File: /app/View/Posts/view.ctp -->
<?= $this->Html->script('https://maps.google.com/maps/api/js?sensor=true', false); ?>
<?= $this->Html->script("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false); ?>
<?= $this->Html->script("http://maps.google.com/maps/api/js?sensor=false", false); ?>


<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p>Nombre: <?php echo h($post['Post']['name']); ?></p>

<p>Edad: <?php echo h($post['Post']['age']); ?></p>
<p>Raza: <?php echo h($post['Post']['breed']); ?></p>
<p>Descripcion: <?php echo h($post['Post']['description']); ?></p>
<p>imagen: <?php echo $post['Post']['images']; ?></p>



 <?php
      $map_options = array(
        "id"         => "map_canvas",
        "width"      => "500px",
        "height"     => "500px",
        "localize"   => false,
        "zoom"       => 8,
        "marker"     => true,
        "infoWindow" => true
      );
    ?>



<?= $this->GoogleMap->map($map_options); ?>
<?= $this->GoogleMap->addMarker("map_canvas", 1, array("latitude" => $post['Post']['latitude'], "longitude" => $post['Post']['longitude'])); ?>

