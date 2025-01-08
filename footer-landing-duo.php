<footer class="bg-primary">  


</footer>


<?php wp_footer(); ?>

<?php 
    $footer_script = get_field('adscript');
    if( $footer_script && !empty($footer_script['ads_footer_script']) ): ?>
        <?php echo ($footer_script['ads_footer_script']); ?>
<?php endif; ?>

</body>
</html>