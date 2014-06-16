<br />
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

    </div>		
