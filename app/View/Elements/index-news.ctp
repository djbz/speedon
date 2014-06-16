<!--<br />
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading text-center">News</div>
<div style="color : black; text-align:justify"  class="panel-body">
<div class="container col-md-12">
<div class="row">
<div class="col-md-12 text-center">
</div>
</div>
<br />
<div class="row">
<div class="col-xs-12">
<table class="table table-striped table-hover"> 
<tbody>
<?php foreach ($news as $new): ?> 
<tr>
<td><?php echo $this->Html->link($new['News']['titre'], array('controller' => 'news', 'action' => 'view', $new['News']['id']), array('class' => 'col-md-12')); ?></td>

<td><?php echo $new['News']['date']; ?></td>

<?php endforeach; ?> <?php unset($new); ?>      
</tr>   
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
<hr />
</div>
</div>
</div>
</div>
</div> 
</div>
</div>

</div>	-->
<div class="row">
    <div class="col-lg-10">
        <?php foreach ($news as $new): ?> 
        <div class="row">
            <div class="col-lg-10 col-md-offset-2 well">
                <?php echo '<h4>'.$this->Html->link($new['News']['titre'], array('controller' => 'news', 'action' => 'view', $new['News']['id']), array('class' => 'col-md-12 text-center', 'style' => 'text-decoration:none;')).'</h4>'; ?>
                <?php 
                if(!empty($new['News']['img'])){
                    echo '<div class="col-md-4">' . $this->Html->image($new['News']['img'], array('class' => 'img-responsive img-thumbnail')) . '</div>';
                }
                echo '<br/><br/><div style="text-align:justify; margin: 5px 70px 5px 70px;">'.$new['News']['texte'].'</div><br/><br/>';
                echo '<br/><span style="color:grey;position:absolute; bottom:0;  margin-bottom:7px; margin:7px; right: 0;"><small>'.strftime("%d/%m/%Y %H:%M", strtotime($new['News']['date'])).'</small></span>';
                 ?>
            </div>

        </div>   
        <br/>
        <?php endforeach; ?> <?php unset($new); ?>
        <?php echo $this->Html->link('Voir plus de news', array('controller' => 'news', 'action' => 'index'),array('class' => 'btn btn-default col-lg-6 col-md-offset-4 well')); ?>
    </div>
</div>   
