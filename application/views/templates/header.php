<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CodeIgniter Blog</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
            </div>
            <div class="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>about">About</a></li>
                    <li><a href="<?php echo base_url(); ?>posts">Posts</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
