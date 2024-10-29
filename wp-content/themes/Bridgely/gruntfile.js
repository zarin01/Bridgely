module.exports = function(grunt) {
  
  grunt.initConfig({
    sass: {         
      dist: {                         
        options: {                      
          style: 'expanded'
        },
        files: {                   
          'library/css/style.css': 'library/scss/style.scss',
          'library/js/slick/slick-theme.css': 'library/js/slick/slick-theme.scss',
        }
      }
    },

    autoprefixer:{
      dist:{
        files:{
          'library/css/style.css':'library/css/style.css',
          'library/js/slick/slick-theme.css': 'library/js/slick/slick-theme.scss',
        }
      }
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'library/css',
          src: ['*.css', '!*.min.css'],
          dest: 'library/css',
          ext: '.min.css'
        }]
      }
    },    
    watch: {
      css: {
        files: ['library/scss/**/*.scss','library/js/slick/**/*.scss'],
        tasks: ['sass', 'autoprefixer', 'cssmin'],
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['watch']);

};