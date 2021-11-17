

<?php include_once("../view/bits/header.php") ?>


<main class="column column--main">


<?php /*  

EXAMPLE MYSQL CONNECTION. FOR THIS EXAMPLE WE USE THE FALLOWING TABBLE FIELDS

TABLENAME : tablet

ID
NAME
IFRAME

*/ ?>

<?php foreach ($dataQ as $item) { ?>

    <button class="button mdl-btn" data-modal="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></button>

    <div class="modal" id="<?php echo $item['id']; ?>">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title"><?php echo $item['name']; ?></p>
          <button class="delete mdl-btn" aria-label="close"  data-modal="<?php echo $item['id']; ?>"></button>
        </header>
        <section class="modal-card-body">
            <?php echo $item['iframe']; ?>
        </section>
        <footer class="modal-card-foot">
          <button class="button mdl-btn" data-modal="<?php echo $item['id']; ?>">Cancel</button>
        </footer>
      </div>
    </div><?php } ?>


</main>










