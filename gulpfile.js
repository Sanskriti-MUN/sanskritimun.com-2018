const autoprefix = require("gulp-autoprefixer");
const gulp = require("gulp");
const pug = require("gulp-pug");
const stylus = require("gulp-stylus");
const surge = require("gulp-surge");
const ts = require("gulp-typescript");
const webserver = require("gulp-webserver");

gulp.task('webserver', function() {
	return gulp.src("dist")
	.pipe(webserver({
		livereload: true,
		open: true
	}))
})

gulp.task('pug', function() {
	return gulp.src(['src/pug/**/*.pug', '!src/pug/includes/*'])
	.pipe(pug())
	.pipe(gulp.dest('dist'));
})

gulp.task('stylus', function() {
	return gulp.src('src/styl/*.styl')
	.pipe(stylus({
		compress: true
	}))
	.pipe(autoprefix({
		cascade: false
	}))
	.pipe(gulp.dest('dist/assets/css'));
})

gulp.task('scripts', function() {
	return gulp.src('src/ts/*.js')
	.pipe(gulp.dest('dist/assets/js'))
})

gulp.task('deploy', function() {
	return surge({
		project: './dist',
		domain: 'smun.surge.sh'
	})
})

gulp.task('default', ['webserver', 'pug', 'stylus', 'scripts'], function () {
	gulp.watch(['src/pug/**/*.pug', 'src/styl/**/*.styl', 'src/ts/*.js'], ['pug', 'stylus', 'scripts']);
})