module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: {
        sourceMap: false,
        outputStyle: 'nested debug',
        sourceComments: true,
      },
      dist: {
        files: {
          '../wp-content/themes/el-barbo6/style.css': 'sass/style.scss'
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-sass');

  // Default task(s).
  grunt.registerTask('default', ['sass']);

};