var gulp = require('gulp'),
    sass = require('gulp-sass'); //Подключаем Sass пакет
    concat      = require('gulp-concat'), // Подключаем gulp-concat (для конкатенации файлов)
    uglify      = require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    autoprefixer = require('gulp-autoprefixer'),// Подключаем библиотеку для автоматического добавл
    cssnano     = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    sourcemaps = require('gulp-sourcemaps');

gulp.task('mytask', function() {
    console.log('Gulp запущен');
});

gulp.task('sass', function(){ // Создаем таск "sass"
    return gulp.src('*.scss') // Берем источник
        .pipe(sourcemaps.init())
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(sourcemaps.write('/maps'))
        .pipe(gulp.dest('')) // Выгружаем результата в папку 
});

gulp.task('scripts', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'libs/**/*.js'])
        .pipe(concat('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')); // Выгружаем в папку app/js
});

gulp.task('css-libs', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'libs/**/*.css'])
        .pipe(concat('libs.min.css')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(cssnano())
        .pipe(gulp.dest('')); // Выгружаем в папку app/js
});

gulp.task('css-all', function() {
    return gulp.src([ // Берем все необходимые библиотеки
        'libs.min.css','theme-style.css'])
        .pipe(concat('style.css')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(cssnano())
        .pipe(gulp.dest('')); // Выгружаем в папку app/js
});



gulp.task('watch',['scripts', 'css-libs', 'css-all'],  function() {
    gulp.watch('*.scss', ['sass']); // Наблюдение за scss файлами
    gulp.watch('libs/**/*.css', ['css-libs']);
    gulp.watch('libs/**/*.js', ['scripts']);
    gulp.watch('libs.min.css', ['css-all']);
    gulp.watch('theme-style.css', ['css-all']);
    
    // Наблюдение за другими типами файлов
});

gulp.task('default', ['watch']);
