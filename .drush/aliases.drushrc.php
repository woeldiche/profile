<?php
/**
 * $sites = array(
 *  'demo' => array( // Demo here is the aliases name.
 *    'live' => array( // The live site's information will be the alias @demo_live.
 *     'uri'  => 'demo.com', // Site URI (Required).
 *     'path' => '/home/www/aegir/', // Base path on the server (Optional, if not defined $default_root_remote_path is used).
 *     'root' => 'platforms/drupal-7.12', // The root path, which is add the path above (Required).
 *     'host' => 'aegir.server.com', // The server that hosts the site (Required).
 *     'user' => 'aegir', // The remote ssh user on the server (Required).
 *     'files' => 'sites/demo.com/files', // The files directory for the site (Optional, if not defined drush will try to detect it).
 *   ),
 *   'stg' => array( // The staging/sandbox site's information will be the alias @demo_stg (Optional).
 *     'uri'  => 'stg.demo.com',
 *     'root' => 'stg_demo_com/htdocs/',
 *     'host' => 'stg.server.com',
 *   'dev' => array( // The local development site's information will be the alias @demo_dev.
 *     'local' => TRUE, // Mark this sub-array as defining the local alias (Required).
 *     'uri'  => 'demo.localhost',
 *     'root' => 'work/drupal/demo/htdocs/',
 *   ),
 * ),
 * );
*/

// Default configuration paths.
$default_root_remote_path = '/var/aegir/platforms/';
$default_root_local_path = '/Users/woeldiche/Sites/';
$default_remote_user_name = 'aegir';

// Define the sites basic configuration.
$sites = array(
  // Online Designguide på Drupal
  'designguide' => array(
    'live' => array(
      'uri'  => 'www.branddenmark.com/',
      'root' => 'drupal-7.16.1',
      'host' => 'work.bysted.dk',
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'designguide.local',
      'root' => 'work/designguide_local/htdocs/',
    ),
  ),
  // Feel Like Designguide
  'feellike' => array(
    'live' => array(
      'uri'  => 'feellikedesignguide.dk/',
      'root' => 'designguide-7.22.0',
      'host' => 'work.bysted.dk',
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'feellikedesignguide.local',
      'root' => 'work/feellikedesignguide_dk/htdocs/',
    ),
  ),
  // VisitNordsjælland Infostander
  'infostander' => array(
    'live' => array(
      'uri'  => 'infostand.workingpropeople.com/',
      'path' => '/var/www/',
      'root' => 'infostand/',
      'host' => 'aegir.pro',
      'user' => 'jesper'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'infostander.visitn.local',
      'root' => 'work/infostander_visitnord_local/htdocs',
    ),
  ),
  // Øresunds Event Center
  'oec' => array(
    'live' => array(
      'uri'  => 'oresundeventcenter.com/',
      'path' => '/data/aegir/platforms/',
      'root' => 'bystedcore-7.21.0/',
      'host' => 'revealit',
      'user' => 'bysted'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'oec.local',
      'root' => 'work/oec_dk/htdocs/',
    ),
  ),

  // Sund-by-net
  'sundby' => array(
    'live' => array(
      'uri'  => 'prod.sund-by-net.dk/',
      'path' => '/data/aegir/platforms/',
      'root' => 'bystedcore-7.16.1/',
      'host' => 'revealit',
      'user' => 'bysted'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'sundby.local',
      'root' => 'work/sundby/htdocs/',
    ),
  ),

  // Kulturmetropol Øresund
  'kulturm' => array(
    'live' => array(
      'uri'  => 'kulturmetropol.work.bysted.dk/',
      'root' => 'drupal-7.16.1',
      'host' => 'work.bysted.dk',
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'kulturmetropol.local',
      'root' => 'work/kulturmetropol_dk/htdocs/',
    ),
  ),

  // Egedal Gymnasium
  'egedal' => array(
    'live' => array(
      'uri'  => 'egedalgym.dk',
      'path' => '/data/aegir/platforms/',
      'root' => 'bystedbastard-7.19.1/',
      'host' => 'revealit',
      'user' => 'aegir'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'egedal.local',
      'root' => 'work/egedalgym_dk/htdocs/',
    ),
  ),

  // VisitNordsjælland Infostander
  'pweb' => array(
    'live' => array(
      'uri'  => 'personaleweb.workingpropeople.com/',
      'path' => '/var/www/',
      'root' => 'personaleweb',
      'host' => 'aegir.pro',
      'user' => 'jesper'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'personaleweb.local',
      'root' => 'work/personaleweb_dk/htdocs',
    ),
  ),
  // COWI Scope
  'cowi' => array(
    'live' => array(
      'uri'  => 'beltofteweardev.devcloud.acquia-sites.com/',
      'path' => '/var/www/',
      'root' => 'html/beltofteweardev/docroot/',
      'host' => 'srv-1924.devcloud.hosting.acquia.com',
      'user' => 'beltoftewear'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'scope.local',
      'root' => 'work/cowiscope_com/htdocs',
    ),
  ),
  // COWI Scope
  'devscope' => array(
    'live' => array(
      'uri'  => 'beltofteweardev.devcloud.acquia-sites.com/',
      'path' => '/var/www/',
      'root' => 'html/beltofteweardev/docroot/',
      'host' => 'srv-1924.devcloud.hosting.acquia.com',
      'user' => 'beltoftewear'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'dev.scope.local',
      'root' => 'work/cowiscope_com/branch-jquery_upgrade/docroot',
    ),
  ),
    // COWI Scope
  'cowistage' => array(
    'live' => array(
      'uri'  => 'beltofteweartest.devcloud.acquia-sites.com/',
      'path' => '/var/www/',
      'root' => 'html/beltofteweartest/docroot/',
      'host' => 'srv-1924.devcloud.hosting.acquia.com',
      'user' => 'beltoftewear'
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'scope.local',
      'root' => 'work/cowiscope_com/htdocs',
    ),
  ),
  // Site b
  'siteb' => array(
    'live' => array(
      'uri'  => 'siteb.com',
      'path' => '/home/www/aegir/',
      'root' => 'platforms/drupal-7.12.2',
      'host' => 'aegir.server.com',
      'user' => 'aegir',
    ),
    'dev' => array(
      'local' => TRUE,
      'uri'  => 'siteb.localhost',
      'root' => 'work/drupal/siteb/htdocs/',
    ),
  ),
);

/**
 * This is the main part of the alias script that builds the $aliases and $options
 * array that drush uses based on the custom $sites array defined above.
 */
foreach ($sites as $alias => $site) {
  foreach ($site as $key => $type) {
   // Check if this is the local type (which as default is live, stg or dev).
    $local = FALSE;
    if (isset($type['local'])) {
      $local = $type['local'];
    }

    // If not local add remote options else build local alias.
    if (!$local) {
      $user = array_key_exists('user', $type) ? $type['user'] : $default_remote_user_name;
      $aliases[$alias.'_'.$key] = array(
        'root' => (isset($type['path']) ? $type['path'] . $type['root'] : $default_root_remote_path . $type['root']),
        'uri' => $type['uri'],
        'remote-host' => $type['host'],
        'remote-user' => isset($type['user']) ? $type['user'] : $user,
      );
    }
    else {
      $aliases[$alias.'_'.$key] = array(
        'root' => $default_root_local_path . $type['root'],
        'uri' => $type['uri'],
        '#live' => '@' . $alias . '_live',
      );
    }

    // Set default dump path when using sql-sync.
    $aliases[$alias.'_'.$key]['path-aliases'] = array(
      '%dump' => '/tmp/sql-sync-' . $alias . '_' . $key . '.sql',
    );

    // Set files directory if defined, if not drush will try to detect it.
    if (isset($type['files'])) {
      $aliases[$alias.'_'.$key]['path-aliases']['%files'] = $type['files'];
    }
  }
}

// Remove the $sites array
unset($sites);

// Add three new commands to synchronize sites to local development environment.
$options = array();
$options['shell-aliases']['pull-data'] = '!drush sql-sync {{#live}} {{@target}} --no-cache && drush rsync {{#live}}:%files {{@target}}:%files';
$options['shell-aliases']['pull-sql'] = '!drush sql-sync {{#live}} {{@target}} --no-cache';
$options['shell-aliases']['pull-files'] = '!drush rsync {{#live}}:%files {{@target}}:%files';

// Debug statement, which can be used to see if the arrays are build correctly.
//print_r($options);
//print_r($aliases);
