<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assest/css/prism.css'); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assest/css/chosen.min.css'); ?>" />
        <script type="text/javascript" src="<?php echo base_url('assest/js/jquery-3.2.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assest/js/chosen.proto.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assest/js/chosen.jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assest/js/custom.js'); ?>"></script>

    </head>
    <body>
        <div id="container">
            <h1>Welcome to CodeIgniter!</h1>
            <div id="body">
                <?php echo form_open('welcome/save', '', $hidden = array()); ?>
                <div class="label" style="display: block;clear: both;">
                    <?php echo form_label('Choose Country', 'country', $attributes = array()); ?>
                </div>
                <div class="input" style="display: block;clear: both;">
                    <?php foreach ($countries as $key => $value): ?>
                        <?php $options[$value->id] = $value->name . ' (' . $value->iso . ')';?>
                    <?php endforeach?>
                </div>
                <?php echo form_dropdown('country', $options, set_value('country'), $attributes = array()); ?>
                <div class="label" style="display: block;clear: both;">
                    <?php echo form_label('Choose Multiple Countries', 'multiple_countries', $attributes = array()); ?>
                </div>
                <div class="input" style="display: block;clear: both;">
                    <?php foreach ($countries as $key => $value): ?>
                        <?php $options[$value->id] = $value->name . ' (' . $value->iso . ')';?>
                    <?php endforeach?>
                </div>
                <?php echo form_dropdown('multiple_countries[]', $options, set_value('multiple_countries[]'), $attributes = array("multiple" => "multiple")); ?>
                <div class="submit" style="display: block;clear: both;">
                    <?php echo form_submit('submit', 'Save'); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
    </body>
</html>
