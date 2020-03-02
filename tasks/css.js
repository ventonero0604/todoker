//Gulp
import gulp from 'gulp';
import gulpLoadPlugin from 'gulp-load-plugins';
import gulpPostCss from 'gulp-postcss';
import base64 from 'gulp-base64';

// postCss plugin
import autoprefixer from 'autoprefixer';
import atImport from 'postcss-partial-import';
import cssnext from 'postcss-cssnext';
import sprites from 'postcss-sprites';
import cssstats from 'postcss-cssstats';
import reporter from 'postcss-reporter';
import size from 'postcss-size';
import each from 'postcss-each';
import cssnano from 'cssnano';
import stylelint from 'stylelint';
import cssmixins from 'postcss-mixins';
import cssnested from 'postcss-nested';
import vars from 'postcss-simple-vars';

// Util
import runSequence from 'run-sequence';

const $ = gulpLoadPlugin();
const supportBrowser = ['> 1%', 'last 2 versions', 'ie 6-8'];

// Data
const pkg  = require('../package.json');
const path = {
  src   : pkg.directories.src
};

gulp.task('css', ['stylelint'], () => {
  const processors = [
    atImport(),
    size,
    each,
    cssmixins,
    cssnested,
    vars,
    cssnext({
      browsers:supportBrowser,
      features:{
        customProperties: true,
        calc: true,
        customMedia: false,
        mediaQueriesRange: false,
        nesting: true
      }
    }),
  ];

  return gulp.src(path.src + '/css/*.css')
    .pipe($.plumber())
    .pipe($.postcss(processors))
    .pipe(gulp.dest(path.src + '/dist/css/'))
    .pipe($.base64({
      extensions: [/\/datauri\//]
    }))
    .pipe(gulp.dest(path.src + '/dist/css/'))
});

gulp.task('css:build', ['stylelint'], () => {
  const processors = [
    atImport(),
    size,
    each,
    cssmixins,
    cssnested,
    cssnext({
      browsers:supportBrowser,
      features:{
        customProperties: true,
        calc: true,
        customMedia: false,
        mediaQueriesRange: false,
        nesting: true,
        color: true
      }
    }),
    cssnano()
  ];

  return gulp.src(path.src + '/css/*.css')
    .pipe($.plumber())
    .pipe($.postcss(processors))
    .pipe($.base64({
      extensions: [/\/datauri\//]
    }))
    .pipe(gulp.dest(path.src + '/dist/css/'))
    .pipe(gulp.dest('./build/css/'));
});

gulp.task('stylelint', () => {
  const processors = [
    stylelint(),
    reporter({
      clearMessages: true,
    })
  ];

  return gulp.src(path.src + '/css/**/*.css')
    .pipe($.plumber())
    .pipe($.postcss(processors));
});

gulp.task('cssstats', () => {
  const processors = [
    cssstats(
      function(stats) {
          console.log(stats);
      }
    )
  ];

  return gulp.src(path.src + '/dist/css/*.css')
    .pipe($.plumber())
    .pipe($.postcss(processors))
});
