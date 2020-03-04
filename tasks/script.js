//Gulp
import gulp from 'gulp';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';

//Build
import browserify from 'browserify';
import babelify from 'babelify';
import source from 'vinyl-source-stream';

// Data
const pkg  = require('../package.json');
const path = {
  src : pkg.directories.src
};

gulp.task('js', function () {
    console.log('--------- js task ----------');
    browserify(path.src + '/js/app.js', { debug: true })
        .transform(babelify)
        .bundle()
        .on("error", function (err) { console.log("Error : " + err.message); })
        .pipe(source("app.js"))
        .pipe(gulp.dest(path.src + '/dist/js/'));
});

gulp.task('js:build', function(){
    console.log('--------- js:build task ----------');
    gulp.src(path.src + '/js/*.js')
        .pipe(concat('main.js'))
        .pipe(uglify({preserveComments: 'some'}))
        .pipe(gulp.dest('./build/js/'));
});
