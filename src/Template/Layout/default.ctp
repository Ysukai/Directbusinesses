<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?> 
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->Link(__('Offre d\'emploi'), ['controller' => 'Offresemplois', 'action' => 'index']) ?></li>
                
                
                <?php if($this->request->session()->read('Auth.User.role') === 'user' || $this->request->session()->read('Auth.User.role') === 'admin'){
                    echo '<li>' . $this->Html->Link(__('Voir mes cv'), ['controller' => 'Files', 'action' => 'index']) . '</li>';
                    echo '<li>' . $this->Html->Link(__('Voir mes postulations'), ['controller' => 'Offresemplois', 'action' => 'viewPost']) . '</li>';
                            
                } ?>
                <?php if($this->request->session()->read('Auth.User.role') === 'entreprise' || $this->request->session()->read('Auth.User.role') === 'admin'){
                    
                    echo '<li>' . $this->Html->Link(__('Voir mes offres'), ['controller' => 'Offresemplois', 'action' => 'viewOwned']) . '</li>';
                }?>
             </ul>
            <ul class="right">
                <li><?php if($this->request->session()->read('Auth.User')){
                        $name = $this->request->session()->read('Auth.User.username');
                        if($this->request->session()->read('Auth.User.role') === 'entreprise'){
                            echo$this->Html->Link($name, ['controller' => 'Entreprises', 'action' => 'view', $profil_id]);
                        }else{
                            echo$this->Html->Link($name, ['controller' => 'Candidats', 'action' => 'view', $profil_id]);
                        }
                    }else{
                        echo $this->Html->Link(__('Login'), ['controller' => 'Users', 'action' => 'login']);
                    }
                ?>
                </li>
                <li>
                    <?php if($this->request->session()->read('Auth.User')){
                            echo $this->Html->Link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']);
                        }else{
                            echo $this->Html->Link(__('Inscription'), ['controller' => 'Users', 'action' => 'add']);
                        }
                ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
