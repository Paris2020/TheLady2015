//*********** IMPORTS *****************
var gulp = require('gulp');
var sass = require('gulp-sass');
var   watch = require('gulp-watch');

gulp.task('sass', function (){
	return gulp.src('scss/*.scss')
	.pipe(sass())	//compile them using sass folder
	.pipe(gulp.dest('css')); //save the css to this destination
});

gulp.task('watch',function(){
	gulp.watch('scss/*.scss',['sass']);
	//gulp.watch('js/*.js');
});

gulp.task('default',['watch','sass']);
