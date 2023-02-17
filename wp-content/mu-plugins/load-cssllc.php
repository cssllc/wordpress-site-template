<?php

$files = glob( 'cssllc/cssllc-*.php' );

if ( empty( $files ) ) {
	return;
}

foreach ( $files as $file ) {
	require_once $file;
}