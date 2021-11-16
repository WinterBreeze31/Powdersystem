

<?php include_once("../view/bits/header.php") ?>

<div class="modal" id="modal1">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete mdl-btn" aria-label="close"  data-modal="modal1"></button>
    </header>
    <section class="modal-card-body">
      <p>modal1</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button mdl-btn" data-modal="modal1">Cancel</button>
    </footer>
  </div>
</div>
<button class="button mdl-btn" data-modal="modal1">open</button>
