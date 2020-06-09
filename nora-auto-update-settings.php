<?php
/*
 * Plugin Name: norando-auto-update-settings
 * Author: norando
 * Author URI: https://norando.net
 * Version: 1.1.0
 * Description: 自動アップデートの設定
 */

 // プラグインの自動更新をON
add_filter( 'auto_update_plugin', '__return_true' );

// テーマの自動更新をON
add_filter( 'auto_update_theme', '__return_true' );