<?php
/**
 * Created by PhpStorm.
 * User: jairo
 * Date: 05/07/15
 * Time: 23:00
 */
?>
<!-- Fixed navbar -->
<div class="navbarnavbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $this->lang->line('system_
system_name'); ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navnavbar-nav">
                <li class="active"><?php echo anchor('create', 'Create') ; ?></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>
<div class="container theme-showcase" role="main">