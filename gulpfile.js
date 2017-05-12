'use strict';
 
var gulp = require('gulp');
var runSequence = require('run-sequence'); // 同期的に処理してくれる
var del = require('del');
 
gulp.task('copy', function() {
    return gulp.src(
            [
                './**/*.php',
                './assets/dist/**',
                './style.css',
                "!./dist/**",
                "!./node_modules/**/*.*"
            ],
            { base: './' }
        )
        .pipe( gulp.dest( 'dist' ) ); // distディレクトリに出力
} );

gulp.task('clean', function(cb) {
  del(['dist', 'tmp', '**/*.log','.travis.yml'], cb);
});

gulp.task('build', ['clean'], function() {
  // Something
});

gulp.task('build:dist',function(){
    /* ここで、CSS とか JS をコンパイルする */
});
 
gulp.task('dist', function(cb){
    return runSequence( 'build:dist', 'copy', 'clean', cb );
});