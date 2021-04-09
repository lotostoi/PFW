<?php

function bt_include_scripts_leaflet() {
    

    wp_enqueue_script( 'framework-leaflet-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.js' );
    wp_enqueue_script( 'framework-leaflet-markercluster-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.markercluster.js' );
    wp_enqueue_script( 'framework-leaflet-ajax-min-js', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.ajax.min.js' ); 
    
    
    wp_enqueue_style( 'framework-lefflet-css', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/leaflet.css', array(), false, 'screen');
    wp_enqueue_style( 'framework-markercluster-css', plugin_dir_url( __FILE__ ) . 'leafletmap/lib/MarkerCluster.css', array(),false, 'screen' );                 
    wp_enqueue_style( 'framework-markerclustee-default-css',  plugin_dir_url( __FILE__ ) . 'leafletmap/lib/MarkerCluster.Default.css', array(), false, 'screen' ); 

  
    wp_enqueue_script( 'leafletmap-source-js', plugin_dir_url( __FILE__ ) . 'leafletmap/js/leafletmap-source.js' );
    
}


bt_include_scripts_leaflet_from_theme();

function bt_include_scripts_leaflet_from_theme() {
    
  
    $leaflet_framework_path = plugins_url() . '/bold-page-builder/content_elements/bt_bb_leaflet_map/';
    
  
    wp_enqueue_script( 'framework-leaflet-js', $leaflet_framework_path . 'leafletmap/lib/leaflet.js' );
    wp_enqueue_script( 'framework-leaflet-markercluster-js', $leaflet_framework_path . 'leafletmap/lib/leaflet.markercluster.js' );
    wp_enqueue_script( 'framework-leaflet-ajax-min-js', $leaflet_framework_path . 'leafletmap/lib/leaflet.ajax.min.js' ); 
    
  
    wp_enqueue_style( 'framework-lefflet-css', $leaflet_framework_path . 'leafletmap/lib/leaflet.css', array(), false, 'screen');
    wp_enqueue_style( 'framework-markercluster-css', $leaflet_framework_path . 'leafletmap/lib/MarkerCluster.css', array(),false, 'screen' );                 
    wp_enqueue_style( 'framework-markerclustee-default-css',  $leaflet_framework_path . 'leafletmap/lib/MarkerCluster.Default.css', array(), false, 'screen' ); 

  
    wp_enqueue_script( 'leafletmap-source-js', $leaflet_framework_path . 'leafletmap/js/leafletmap-source.js' );
    
}

