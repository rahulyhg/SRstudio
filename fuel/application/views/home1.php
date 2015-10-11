<?php //$CI->load->module_view('app', '_install') ?>

<?=fuel_set_var('layout', '')?>

<?php $this->load->view('_blocks/header')?>

<?php $posts = fuel_model('blog_posts', array('find' => 'all', 'limit' => 3, 'order' => 'sticky, date_added desc', 'module' => 'blog')) ?>
<?php if (!empty($posts)) : ?>
<h2>The Latest from our Blog</h2>
<ul>
<?php foreach($posts as $post) : ?>
<li>
    <h4><a href="<?php echo $post->url; ?>"><?php echo $post->title; ?></a></h4>
    <?php echo $post->get_excerpt(200, 'Read More'); ?>
</li>
<?php endforeach; ?>
</ul>
 
<?php endif; ?>

<?php $this->load->view('_blocks/footer')?>