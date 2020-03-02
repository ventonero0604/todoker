//Gulp
import gulp from 'gulp';
import spritesmith from 'gulp.spritesmith';
import _ from 'lodash';

// Util
import runSequence from 'run-sequence';

// Data
const pkg  = require('../package.json');
const path = {
  src  : pkg.directories.src,
};

gulp.task('sprite', (cb) => {
      runSequence('sprite:create', cb);
});



gulp.task('sprite:create', function () {
  var spriteData = gulp.src(path.src + '/asset/sprite/*.png').pipe(spritesmith({
    imgName: './dist/image/all.png',
    cssName: './css/tool/_sprite.css',
    imgPath: '../image/all.png',
    cssTemplate: path.src + '/css/tool/sprite/_sprite-map.css.mustache',
    padding: 4,
    cssVarMap: (function () {
        var index = 0;

        return function (sprite) {
            sprite.width = sprite.width / 2;
            sprite.height = sprite.height / 2;
            sprite.x = sprite.x / 2;
            sprite.y = sprite.y / 2;
            sprite.name = _.camelCase(sprite.name);

            if (index === 0) {
                sprite.map = {
                    width:   (sprite.total_width / 2) + 'px',
                    height:  (sprite.total_height / 2) + 'px',
                    image:   sprite.image.replace(/_2x/, ''),
                    image2x: sprite.image
                };
            }
            index++;
        };
    })()
  }));
  return spriteData.pipe(gulp.dest(path.src));
});
