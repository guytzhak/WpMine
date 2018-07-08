"use strict";

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    sass   = require('gulp-sass'),
    maps   = require('gulp-sourcemaps'),
    del    = require('del'),
    browserSync   = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer');

function swallowError (error) {
    //Prints details of the error in the console
    console.log(error.toString());
    this.emit('end')
}


gulp.task('minifyScripts', function (cb) {
    return gulp.src('js/scripts.js')
        .pipe(maps.init())
        .on('error', swallowError)
        .pipe(uglify())
        .pipe(rename('scripts.min.js'))
        .pipe(maps.write('./maps'))
        .pipe(gulp.dest('js'))
        .pipe(browserSync.stream({match: 'js/app.min.js'}));
});

gulp.task('compileSass', function (cb) {
    return gulp.src('style.scss')
        .pipe(maps.init())
        .pipe(autoprefixer())
        .pipe(sass())
        .on('error', swallowError)
        .pipe(maps.write('./'))
        .pipe(gulp.dest(''))
        .pipe(browserSync.stream({match: 'style.css'}));
});

gulp.task('watchFiles', function () {
    gulp.watch(['css/components/*.scss', '*.scss'], ['compileSass']).on('change', browserSync.reload);;
    gulp.watch(['js/bootstrap.js', 'js/scripts.js'], ['minifyScripts']).on('change', browserSync.reload);;
});

gulp.task('sync', function() {
    var options = {
        proxy: 'wpmine.test',
        port: 3000,
        files: [
            '**/*.php',
        ],
        ghostMode: {
            clicks: false,
            location: false,
            forms: false,
            scroll: false
        },
        injectChanges: true,
        logFileChanges: true,
        logLevel: 'debug',
        logPrefix: 'gulp-patterns',
        notify: true,
        reloadDelay: 0
    };
    browserSync(options);
});

gulp.task("build", ['minifyScripts', 'compileSass']);

gulp.task('default', ['watchFiles', 'sync']);
