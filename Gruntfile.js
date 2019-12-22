'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
  concat: {
        js: {
          src: ['assets/js/scripts.js'],
          dest: 'build/js/scripts.js',  
        },
        csssass: {
          src: ['assets/sass/**/*.scss'],
          dest: 'build/css/styles.min.css',  
        },
    },  
    sass: {
      dist: {
        options: {
          style: 'compressed',
          compass: false,
          sourcemap: false
        },
        files: {
          'build/css/styles.min.css': [
              'assets/sass/styles.scss'
          ]
        }
      }
    },
    watch: {
      js: {
        files: ['assets/js/*.js'],
        tasks: ['concat'],
      },
      csssass: {
        files: ['assets/sass/**/*.scss'],
        tasks: ['concat'],
      },
      options: {
        livereload: true
      },
      sass: {
        files: [
          'assets/sass/**/*.scss'
        ],
        tasks: ['sass']
      },
      js: {
        files: [
          'assets/js/*.js'
        ],
        tasks: ['uglify']
      },
      html: {
        files: [
          '**/*.html'
        ]
      }
    },
    uglify: {
      dist: {
        files: {
          'build/js/scripts.min.js': [
            'assets/js/scripts.js'
          ]
        },
        options: {
          sourceMap: 'build/scripts.min.js.map',
          sourceMappingURL: 'build/scripts.min.js.map'
        }
      }
    },
    clean: {
      dist: [
        'build/css/styles.min.css',
        'build/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Register tasks
  grunt.registerTask('default', ['concat','uglify','clean','sass']);
  grunt.registerTask('dev', ['watch']);

};