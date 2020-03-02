//Gulp
import gulp from 'gulp';

// Util
import runSequence from 'run-sequence';

// Import
import './image';
import './css';
import './script';
import './connect';

// Data
const pkg  = require('../package.json');
const path = {
  src : pkg.directories.src,
};

gulp.task('watch:local', ['image:set', 'css', 'js', 'connect:local'], () => {
  gulp.watch(path.src + '/css/**/*', () => {
      runSequence('css', 'bs-reload');
  });
  gulp.watch(path.src + '/js/*', () => {
      runSequence('js');
  });
});

gulp.task('watch', ['image:set', 'css', 'js', 'connect'], () => {
  gulp.watch(path.src + '/css/**/*', () => {
      runSequence('css', 'bs-reload');
  });
  gulp.watch(path.src + '/js/*', () => {
      runSequence('js');
  });
});
