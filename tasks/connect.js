//Gulp
import gulp from 'gulp';
import connect from 'gulp-connect-php';

// Util
import browserSync from 'browser-sync';

// Data
const pkg  = require('../package.json');
const path = {
  src  : pkg.directories.src,
};

gulp.task('connect', function() {
  connect.server({
    port:8000,
    base:'/home/{username}/git/mtop/{hoge}/'
  }, function () {
    browserSync({
      port: 8008,
      proxy: '10.21.116.124:8000'
    });
  });
});

// local開発用
gulp.task('connect:local', function() {
  connect.server({
    port:8000,
    base:'./',
    livereload: true
  }, function() {
    browserSync({
      proxy: 'localhost:8000'
    });
  });
});

gulp.task('connect:reload', function () {
    return gulp.src(path.src)
      .pipe(connect.reload());
});

gulp.task('bs-reload', () => {
    browserSync.reload();
});
