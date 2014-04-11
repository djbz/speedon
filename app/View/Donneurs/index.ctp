<!-- File: /app/View/Donneurs/index.ctp -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="panel panel-default">
                <div class="panel-heading "><h1>Donneurs speedon</h1></div>
                    <table class="table table-hover">
                        <tr>
                        <th class="text-center"><h4><?php echo $this->Paginator->sort('Donneur.username','Login'); ?></h4></th>
                                    <th class="text-center"><h4><?php echo 'Total des dons'; // echo $this->Paginator->sort('Donneur.total_don','Total des dons'); ?></h4></th>
                            <!-- rajouter total des dons etc..)-->
                            <!--<th>Prénom</th>
                            <th>Nom</th>
                            <th>Mail</th>
                            <th>Adresse</th>
                            <th>Numéro Tel</th>-->
                        </tr>
                        <?php foreach($donneurs as $donneur): ?>
                        <tr>
                            <td>
                                <?php echo $this->Html->link($donneur['User']['username'],
                                        array('controller' => 'donneurs', 'action' => 'view', $donneur['Donneur']['id'])); ?>
                            </td>
                                    <td>
                                <?php echo $donneur['Donneur']['total_don'];?>
                            </td>
                                    <!-- A AFFICHER ??? CONFIDENTIEL ?-->
                            <!--<td><?php echo $donneur['Donneur']['prenom']; ?></td>
                            <td><?php echo $donneur['Donneur']['nom']; ?></td>
                            <td><?php echo $donneur['Donneur']['mail']; ?></td>
                            <td><?php echo $donneur['Donneur']['adresse_postale']; ?></td>
                            <td><?php echo $donneur['Donneur']['numero_tel']; ?></td>-->
                        </tr>
                        <?php 
                                    endforeach;
                                    unset($donneur);
                            ?>
                    </table>
                    <?php	
                            echo $this->Paginator->prev('Donneurs précédents') . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->numbers() . '&nbsp;'. '&nbsp;';
                            echo $this->Paginator->next('Donneurs suivants');
                       
                            echo '<br/><br/><h4>' . $this->Html->link("GENERATION DES DONS MENSUELS", 
                                                        array('controller' => 'donneurs','action'=> 'activationMensuelleDons'),
                                                        array('class' => 'btn btn-lg btn-warning active')) 
                            . '</h4>';
                    ?>
            </div>
        </div>
    </div>
</div>