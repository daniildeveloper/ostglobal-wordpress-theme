var gulp = require('gulp'),
    sync = require('browser-sync'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    mincss = require('gulp-minify-css'),
    watch = require('gulp-watch'),
    pug = require('gulp-pug'),
    notify = require('gulp-notify'),
    babel = require('gulp-babel'),
    reload = sync.reload;

gulp.task('watch', ['scss'], function () {
    gulp.watch('./*.scss', ['scss']);
})

/**
 * run gulp watch dev server
 */
gulp.task('default', ['framework-prepare', 'scss', 'pug', 'img', 'fonts', 'js', 'js_vendor', 'css_vendor'], function () {
    sync.init({
        server: {
            baseDir: './dist'
        }
    });
    gulp.watch('./*.scss', ['scss']);
    gulp.watch('./src/img/**/*.{svg, jpg, png, gif, jpeg}', ['img']);
    gulp.watch('./src/js/app.js', ['js']);
});

/**
 * less compilation task
 */
gulp.task('scss', function () {
    gulp.src('./sass/style.scss')
        .pipe(sass())
        .on('error', notify.onError(function (err) {
            return 'Scss: ' + err;
        }))
        .pipe(mincss())
        .pipe(gulp.dest('./style.scss'))
        .pipe(reload({
            stream: true
        }))
});

/**
 * compile js or other to readeable in all browsers js
 */
gulp.task('js', function () {
    // todo: listen js
    gulp.src('./src/js/app.js')
        .pipe(babel())
        .on('error', notify.onError(function (err) {
            return "Js: " + err;
        }))
        .pipe(gulp.dest('./dist/js'))
        .pipe(reload({
            stream: true
        }))
});
