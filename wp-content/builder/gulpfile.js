const gulp = require( 'gulp' );
const fs = require( 'fs' );
const del = require( 'del' );

// timestamp build
const ts = Math.round( ( +new Date() ) / 1000 );

// copy especific file extensions
const allowedExt = 'css,js,eot,svg,ttf,woff,woff2,jpg,jpeg,png,webp';

// remove old files
gulp.task( 'clean', function() {
	console.log( 'Removing old files...' );

	return del( 'build/**', { force: true } );
} );

// copy files for source to dest folder
gulp.task( 'build', function() {
	console.log( 'Moving files to build directory...' );

	return gulp.src( `./assets/**/*.{${ allowedExt }}` )
		.pipe( gulp.dest( `./build/${ ts }` ) );
} );

// generate json manifest version based on current timestamp
gulp.task( 'manifest', function( cb ) {
	console.log( 'Generating manifest json file...' );

	fs.writeFile( `./build/manifest.json`, `${ ts }`, cb );
} );

// run all tasks
gulp.task( 'default', gulp.series( 'clean', 'build', 'manifest' ) );
