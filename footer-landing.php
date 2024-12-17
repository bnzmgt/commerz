<footer class="bg-primary">  


</footer>


<?php wp_footer(); ?>

<?php 
    $footer_script = get_field('basic_script', 'option');
    if( $footer_script && !empty($footer_script['basic_footer_script']) ): ?>
        <?php echo ($footer_script['basic_footer_script']); ?>
<?php endif; ?>

</body>
</html>