<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3><?php echo h($news['News']['titre']) ?></h3></div>
                <div style="color : black; text-align:justify"  class="panel-body">
                    <div class="container col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <p><small>Créé le : <?php echo $news['News']['date']; ?></small></p>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(!empty(trim($news['News']['img'])))
                    echo '<div class="col-md-4">' . $this->Html->image($news['News']['img'], array('alt' => 'photo_news', 'class' => 'img-responsive img-circle')) . '</div>'; ?>
                                <p><?php echo h($news['News']['texte']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>		
