/*
|--------------------------------------------------------------------------
| Required Modules
|--------------------------------------------------------------------------
*/

var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
//var ts           = require('gulp-typescript');
var sourcemaps   = require('gulp-sourcemaps');
var plumber      = require('gulp-plumber');
var notify       = require('gulp-notify');
var autoprefixer = require('gulp-autoprefixer');

/*
|--------------------------------------------------------------------------
| Main Tasks
|--------------------------------------------------------------------------
*/

   
    /*
    |----------------------------------------------
    | Browsersync
    |----------------------------------------------
    */

    gulp.task('browser-sync', function() {

        // initialize browser-sync server on localhost:3000
        browserSync.init({
             proxy: "localhost:8888/point-church"
        });
    });

    /*
    |----------------------------------------------
    | Sass
    |----------------------------------------------
    */

    gulp.task('sass', function() {
        
        return gulp
        
            // input files 
            .src('./sass/**/screen.scss')

            // create sourcemap
            .pipe( sourcemaps.init() )

            // Sass options object
            .pipe( sass( { outputStyle: 'compressed'} )

            // handles errors through notify
            .on('error', notify.onError(function (error) {
                return "Message to the notifier: " + error.message;
            }))
            )

            // prevents errors from stopping gulp
            .pipe(plumber())

            // browser preifixes  
            .pipe(autoprefixer())

            // output sourcemap
            .pipe(sourcemaps.write('../stylesheets/'))

            // output files
            .pipe(gulp.dest('./stylesheets/'))

            // conntection to browser-sync
            .pipe(browserSync.stream());
    });

    /*
    |----------------------------------------------
    | TypeScript
    |----------------------------------------------
    */

  /*  gulp.task("ts", function() {

        return gulp
        
            // input files
            .src('./js/ts/*.ts')

            // handles errors through notify
            .on('error', notify.onError(function (error) {
                return "Message to the notifier: " + error.message;
            }))

            // prevents errors from stopping gulp
            .pipe(plumber())

            // create sourcemap
            .pipe(sourcemaps.init())

            // TypeScript object
            .pipe(ts({

                // throws error on implicit any if enabled
                noImplicitAny: true,

                // name of output file
                outFile: 'main.js',
                module: 'amd',
                pretty: true


            }))

            // output sourcemap
            .pipe(sourcemaps.write('../js'))

            // output files 
            .pipe(gulp.dest('./scripts/js/'))

            // conntection to browser-sync
            .pipe(browserSync.stream());
    });*/

    /*
    |----------------------------------------------
    | Twig & PHP
    |----------------------------------------------
    */

    // setup so that changes to the twig and php files can be monitored 
    gulp.task('php', function() {
        
        gulp
        
        .src(['./**/*.php'])

        // conntection to browser-sync
        .pipe(browserSync.stream());
    });

/*
|--------------------------------------------------------------------------
| Watch Task
|--------------------------------------------------------------------------
*/

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch(['./**/*.php'], ['php']);
});

/*
|--------------------------------------------------------------------------
| Default Task
|--------------------------------------------------------------------------
*/

gulp.task('default', ['sass', 'php', 'browser-sync','watch']);