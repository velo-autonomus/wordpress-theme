const sass = require('node-sass');

module.exports = function(grunt) {
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      sass: {
        options: {
            implementation: sass,
            sourceMap: true
        },
        dist: {
          files: [{
            expand: true,
            cwd: 'css/',
            src: ['**/*.scss'],
            dest: 'css/',
            extDot: 'last',  // Extensions in filenames begin after this dot
            ext: '.css'
          }]
        }
      },
      autoprefixer:{
        dist:{
          files: [{
            expand: true,
            cwd: 'css/',
            src: ['**/*.css'],
            dest: 'css/',
            extDot: 'last'  // Extensions in filenames begin after this dot
          }]
        }
      },
      stylelint: {
        all: ['css/**/*.scss']
      },
      watch: {
        options: {
            atBegin: true
        },
        css: {
          files: 'css/**/*.scss',
          tasks: ['sass', 'autoprefixer']
        }
      }
    });
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-stylelint');
    grunt.registerTask('default',['watch']);
    grunt.registerTask('build', ['stylelint', 'sass', 'autoprefixer']);
}