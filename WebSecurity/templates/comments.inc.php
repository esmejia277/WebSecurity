<div class="container">
  <div class="row">
    <div class="col-md-4 offset-4">
    <button class="btn btn-primary form-control" data-toggle = "collapse" data-target="#comment">
      <?php echo "Ver comentarios (" . count($comments) . ")" ?>
    </button>
    </div>

    <div id="comment" class="collapse">
      <?php
      for ($i=0; $i < count($comments); $i++) {
        $newComment = $comments[$i];
      ?>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="card item">
            <div class="card-header">
              <?php echo $newComment -> getTitle(); ?>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <?php echo $newComment -> getAuthor_ID() ?>
                </div>
                <div class="col-md-10">
                  <p>
                    <?php echo $newComment -> getDate(); ?>
                  </p>
                  <p>
                  <?php echo nl2br($newComment -> getText()); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
        }
      ?>
    </div>
  </div>
</div>
</div>
