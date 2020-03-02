//Gulp
import gulp from 'gulp';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';

// Data
const pkg  = require('../package.json');
const path = {
  src : pkg.directories.src
};

gulp.task('js', function(){
    console.log('--------- js task ----------');
    gulp.src(path.src + '/js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest(path.src + '/dist/js/'));
});

gulp.task('js:build', function(){
    console.log('--------- js:build task ----------');
    gulp.src(path.src + '/js/*.js')
        .pipe(concat('main.js'))
        .pipe(uglify({preserveComments: 'some'}))
        .pipe(gulp.dest('./build/js/'));
});
