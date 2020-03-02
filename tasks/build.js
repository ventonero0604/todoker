//Gulp
import gulp from 'gulp';

// Util
import runSequence from 'run-sequence';

// Import
import './clean';
import './image';
import './script';
import './css';

gulp.task('build', (cb) => {
      runSequence('clean', 'image:min', 'image:copy', 'js:build', 'css:build', cb);
});
