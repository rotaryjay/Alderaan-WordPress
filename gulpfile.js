var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('bootstrapcsstodist', function () {
    return gulp.src(['node_modules/bootstrap/dist/css/bootstrap.min.css'])
        .pipe(gulp.dest("dist/css"));
});
gulp.task('csstodist', function () {
    return gulp.src(['src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("dist"));
});
gulp.task('imgtodist', function () {
    return gulp.src(['src/img/*'])
        .pipe(gulp.dest("dist/img"));
});
gulp.task('phptodist', function () {
    return gulp.src(['src/*.php'])
        .pipe(gulp.dest("dist/"));
});
gulp.task('jstodist', function () {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/popper.min.js', 'node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js', 'node_modules/lightbox2/dist/js/lightbox.min.js', 'src/js/wilesjackson.js'])
        .pipe(gulp.dest("dist/js"))
});
gulp.task('fontstodist', function () {
    return gulp.src(['src/fonts/*'])
        .pipe(gulp.dest("dist/fonts"))
});

gulp.task('todist', ['bootstrapcsstodist', 'csstodist', 'imgtodist', 'phptodist', 'jstodist', 'fontstodist']);