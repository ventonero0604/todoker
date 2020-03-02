//Gulp
import gulp from 'gulp';
import rsync from 'gulp-rsync';

// Util
import runSequence from 'run-sequence';
import gulpLoadPlugin from 'gulp-load-plugins';
//
// import
import './build';

const $ = gulpLoadPlugin();

// Data
const pkg  = require('../package.json');
const path = {
  build : pkg.directories.build
};

// イメージサーバーに反映
gulp.task('deploy', (cb) => {
  runSequence(
    'build',
    'deploy',
    cb
  );
});

gulp.task('deploy', () => {
  return gulp.src('./build/**/*')
    .pipe($.rsync({
      root: './build',
      hostname: 'hoge',
      destination: '/hoge/hoge/',
    }));
});
