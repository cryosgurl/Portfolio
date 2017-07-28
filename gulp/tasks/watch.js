var gulp = require('gulp');

gulp.task('watch', ['sass'], function (){
  gulp.watch('assets/scss/**/*.scss', ['sass']);
})
