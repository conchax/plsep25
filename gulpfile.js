const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
//compile scss into css
function style() {
    return gulp.src('sass/estilos.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('plsep/css'))
    .pipe(browserSync.stream());
}
exports.style = style;