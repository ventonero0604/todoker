//Gulp
import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import pngquant from 'imagemin-pngquant';

// Data
const pkg  = require('../package.json');
const path = {
  src : pkg.directories.src
};

gulp.task('image:min', function () {
    gulp.src(path.src + '/dist/image/**/*')
        .pipe(imagemin({
            optimizationLevel: 7,
            use: [pngquant({quality: '60-80', speed: 1})]
        }))
        .pipe(gulp.dest(path.src + '/dist/image/'));
});

gulp.task('image:copy', () => {
  return gulp.src([
    path.src + '/dist/image/**/*'
  ])
  .pipe(gulp.dest('./build/image/'));
});

gulp.task('image:set', () => {
  return gulp.src([
    path.src + '/asset/image/**/*'
  ])
  .pipe(gulp.dest('./src/dist/image/'));
});
