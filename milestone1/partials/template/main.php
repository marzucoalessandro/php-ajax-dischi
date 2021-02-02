<main>
  <div class="container"><?php foreach ($disc_list as $key) { ?>
    <div class="card">
      <img src="<?php echo $key["cover"]; ?>" alt="">
      <h2> <?php echo $key["title"]; ?></h2>
      <h3> <?php echo $key["author"]; ?></h3>
      <h4> <?php echo $key["year"]; ?></h4>
    </div>
  <?php } ?>

  </div>
</main>
</div>
</body>
</html>
