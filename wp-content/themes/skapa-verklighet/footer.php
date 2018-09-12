<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */

function comicpress_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
SELECT
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
    $output = '';
    if($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->lastdate;
        $output = $copyright;
    }
    return $output;
}
?>
    <footer>
        <div class="large-container footer">
            <img src="<?php echo esc_url(home_url( '/wp-content/themes/skapa-verklighet/assets/images/logo-white.png' ) ); ?>">
            <div>
                <p><?php echo comicpress_copyright(); ?>, av Annette Forslund</p>
                <span>webbplats skapad av <a target="_blank" href="https://cone.digital/">Cone Digital</a></span>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
<script src="https://use.typekit.net/otw4nwc.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</body>
</html>