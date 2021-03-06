<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'clearcenter';
$app['version'] = '2.4.3';
$app['release'] = '1';
$app['vendor'] = 'ClearCenter';
$app['packager'] = 'ClearCenter';
$app['license'] = 'Proprietary';
$app['license_core'] = 'Proprietary';
$app['description'] = lang('clearcenter_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('clearcenter_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = lang('base_subcategory_settings');
$app['menu_enabled'] = FALSE;

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['requires'] = array(
    'theme-clearos-admin >= 7.4.3'
);

$app['core_requires'] = array(
    'app-base-core >= 1:2.4.24',
    'app-network-core >= 1:2.3.27',
    'app-language-core',
    'app-suva-core',
    'app-tasks-core >= 1:2.4.0',
    'csplugin-audit',
    'yum-marketplace-plugin',
);

$app['core_file_manifest'] = array( 
    'clearos-fast-updates.repo' => array( 'target' => '/etc/yum.repos.d/clearos-fast-updates.repo' ),
    'clearcenter-update' => array(
        'target' => '/usr/sbin/clearcenter-update',
        'mode' => '0755',
    ),
    'clearcenter-subscriptions' => array(
        'target' => '/usr/sbin/clearcenter-subscriptions',
        'mode' => '0755',
    ),
    'marketplace_version_ctl.sh' => array(
        'target' => '/usr/sbin/marketplace_version_ctl.sh',
        'mode' => '0755',
    ),
    'clearos-gpg-key' => array('target' => '/etc/pki/rpm-gpg/clearos-gpg-key'),
);

$app['core_directory_manifest'] = array( 
    '/var/clearos/clearcenter' => array(),
    '/var/clearos/clearcenter/apps' => array(),
    '/var/clearos/clearcenter/subscriptions' => array(),
);
