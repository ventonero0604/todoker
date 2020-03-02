'use strict';

//Gulp
import gulp from 'gulp';

// Util
import requireDir from 'require-dir';

gulp.task('default', ['watch']);

requireDir('./tasks');
