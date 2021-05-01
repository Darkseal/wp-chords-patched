<?php function wpchords_options() { $pluginData = get_plugin_data(plugin_dir_path(__FILE__).'wpchords.php'); wpchords_initializer(); ?>
<div class="wrap">
  <h1><?php echo $pluginData['Name'] ?></h1>
  <p><?php echo $pluginData['Name'] ?> allows you to format and display the chords on your blog.</p>
  <h2><?php esc_attr_e('Usage'); ?></h2>
  Just cover with <code>[wpchords]</code> shordcode tags and include chords in your favourite songs with below chord codes.
  <div id="col-container">

  <div id="col-left">

    <div class="col-wrap">
      <div class="inside">
<div class="alternate columns-2"><pre>[wpchords]<br/>...content here with chord codes...<br/>[/wpchords]</pre></div>
      </div>

    </div>
    <!-- /col-wrap -->

  </div>
    <br class="clear">

</div>
<!-- /col-container -->
<div class="notice notice-info inline">
  <p>Available chord codes are: </br>
  <code>[Ab]</code>, <code>[Abm]</code>, <code>[Ab6]</code>, <code>[Ab7]</code>, <code>[Ab9]</code>, <code>[Abm6]</code>, <code>[Abm7]</code>, <code>[Abmaj7]</code>, <code>[Abdim]</code>, <code>[Ab+]</code>, <code>[Absus]</code>, <code>[A]</code>, <code>[Am]</code>, <code>[A6]</code>, <code>[A7]</code>, <code>[A9]</code>, <code>[Am6]</code>, <code>[Am7]</code>, <code>[Amaj7]</code>, <code>[Adim]</code>, <code>[A+]</code>, <code>[Asus]</code>, <code>[A#]</code>, <code>[A#m]</code>, <code>[A#6]</code>, <code>[A#7]</code>, <code>[A#9]</code>, <code>[A#m6]</code>, <code>[A#m7]</code>, <code>[A#maj7]</code>, <code>[A#dim]</code>, <code>[A#+]</code>, <code>[A#sus]</code>, <code>[Bb]</code>, <code>[Bbm]</code>, <code>[Bb6]</code>, <code>[Bb7]</code>, <code>[Bb9]</code>, <code>[Bbm6]</code>, <code>[Bbm7]</code>, <code>[Bbmaj7]</code>, <code>[Bbdim]</code>, <code>[Bb+]</code>, <code>[Bbsus]</code>, <code>[B]</code>, <code>[Bm]</code>, <code>[B6]</code>, <code>[B7]</code>, <code>[B9]</code>, <code>[Bm6]</code>, <code>[Bm7]</code>, <code>[Bmaj7]</code>, <code>[Bdim]</code>, <code>[B+]</code>, <code>[Bsus]</code>, <code>[C]</code>, <code>[Cm]</code>, <code>[C6]</code>, <code>[C7]</code>, <code>[C9]</code>, <code>[Cm6]</code>, <code>[Cm7]</code>, <code>[Cmaj7]</code>, <code>[Cdim]</code>, <code>[C+]</code>, <code>[Csus]</code>, <code>[C#]</code>, <code>[C#m]</code>, <code>[C#6]</code>, <code>[C#7]</code>, <code>[C#9]</code>, <code>[C#m6]</code>, <code>[C#m7]</code>, <code>[C#maj7]</code>, <code>[C#dim]</code>, <code>[C#+]</code>, <code>[C#sus]</code>, <code>[Db]</code>, <code>[Dbm]</code>, <code>[Db6]</code>, <code>[Db7]</code>, <code>[Db9]</code>, <code>[Dbm6]</code>, <code>[Dbm7]</code>, <code>[Dbmaj7]</code>, <code>[Dbdim]</code>, <code>[Db+]</code>, <code>[Dbsus]</code>, <code>[D]</code>, <code>[Dm]</code>, <code>[D6]</code>, <code>[D7]</code>, <code>[D9]</code>, <code>[Dm6]</code>, <code>[Dm7]</code>, <code>[Dmaj7]</code>, <code>[Ddim]</code>, <code>[D+]</code>, <code>[Dsus]</code>, <code>[D#]</code>, <code>[D#m]</code>, <code>[D#6]</code>, <code>[D#7]</code>, <code>[D#9]</code>, <code>[D#m6]</code>, <code>[D#m7]</code>, <code>[D#maj7]</code>, <code>[D#dim]</code>, <code>[D#+]</code>, <code>[D#sus]</code>, <code>[Eb]</code>, <code>[Ebm]</code>, <code>[Eb6]</code>, <code>[Eb7]</code>, <code>[Eb9]</code>, <code>[Ebm6]</code>, <code>[Ebm7]</code>, <code>[Ebmaj7]</code>, <code>[Ebdim]</code>, <code>[Eb+]</code>, <code>[Ebsus]</code>, <code>[E]</code>, <code>[Em]</code>, <code>[E6]</code>, <code>[E7]</code>, <code>[E9]</code>, <code>[Em6]</code>, <code>[Em7]</code>, <code>[Emaj7]</code>, <code>[Edim]</code>, <code>[E+]</code>, <code>[Esus]</code>, <code>[F]</code>, <code>[Fm]</code>, <code>[F6]</code>, <code>[F7]</code>, <code>[F9]</code>, <code>[Fm6]</code>, <code>[Fm7]</code>, <code>[Fmaj7]</code>, <code>[Fdim]</code>, <code>[F+]</code>, <code>[Fsus]</code>, <code>[F#]</code>, <code>[F#m]</code>, <code>[F#6]</code>, <code>[F#7]</code>, <code>[F#9]</code>, <code>[F#m6]</code>, <code>[F#m7]</code>, <code>[F#maj7]</code>, <code>[F#dim]</code>, <code>[F#+]</code>, <code>[F#sus]</code>, <code>[Gb]</code>, <code>[Gbm]</code>, <code>[Gb6]</code>, <code>[Gb7]</code>, <code>[Gb9]</code>, <code>[Gbm6]</code>, <code>[Gbm7]</code>, <code>[Gbmaj7]</code>, <code>[Gbdim]</code>, <code>[Gb+]</code>, <code>[Gbsus]</code>, <code>[G]</code>, <code>[Gm]</code>, <code>[G6]</code>, <code>[G7]</code>, <code>[G9]</code>, <code>[Gm6]</code>, <code>[Gm7]</code>, <code>[Gmaj7]</code>, <code>[Gdim]</code>, <code>[G+]</code>, <code>[Gsus]</code>, <code>[G#]</code>, <code>[G#m]</code>, <code>[G#6]</code>, <code>[G#7]</code>, <code>[G#9]</code>, <code>[G#m6]</code>, <code>[G#m7]</code>, <code>[G#maj7]</code>, <code>[G#dim]</code>, <code>[G#+]</code>, <code>[G#sus]</code></p>
</div>

  <h2><?php esc_attr_e('Settings with realtime demo'); ?></h2>
  <div id="poststuff">
  <div id="post-body" class="metabox-holder columns-2">
    <!-- main content -->
    <div id="post-body-content">

      <div class="meta-box-sortables ui-sortable">

        <div class="postbox">

          <h2><span><?php esc_attr_e( 'Source', 'WpAdminStyle' ); ?></span></h2>

          <div class="inside">
            <textarea id="textExample" name="textExample" cols="80" rows="9" class="large-text">
[wpchords]
[A]Al contrario di[G] te  [D]
Io[F] non lo so[A]
Se è g[G]iusto così[D]     [F]
C[A]omunqu[G]e sia[D]
Io [F]non mi mu[Fm]ovo
Io r[Bm]esto qu[E]i
[/wpchords]
</textarea>
<p><i></i></p>
          </div>
          <!-- .inside -->

        </div>
        <!-- .postbox -->

        <div class="postbox">

          <h2><span><?php esc_attr_e( 'Result', 'WpAdminStyle' ); ?></span></h2>

          <div class="inside">
            <div id="resultExample" style="font-size: 150%;">
            </div>
          </div>
          <!-- .inside -->

        </div>

      </div>
      <!-- .meta-box-sortables .ui-sortable -->

    </div>
    <!-- post-body-content -->

    <!-- sidebar -->
<div id="postbox-container-1" class="postbox-container">

  <div class="meta-box-sortables">

    <div class="postbox">
        <h2><?php esc_attr_e('Options'); ?></h2>
      <div class="inside">


        <form action="options.php" method="post">
        <?php settings_fields('wpchords-section'); ?>
        <?php do_settings_sections('wpchords'); ?>
        <input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
        </form>

      </div>
      <!-- .inside -->

    </div>
    <!-- .postbox -->

  </div>
  <!-- .meta-box-sortables -->

</div>
<!-- #postbox-container-1 .postbox-container -->

  </div>
  <!-- #post-body .metabox-holder .columns-2 -->

  <br class="clear">
</div>
<!-- #poststuff -->

</div> <!-- /wrap -->

<?php
}?>
