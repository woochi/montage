module.exports = ( grunt ) ->
  'use strict'

  shim = require('browserify-shim')
  coffeeify = require('coffeeify')
  # Load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks)

  grunt.initConfig
    pkg: grunt.file.readJSON("package.json")
    sass:
      options:
        compass: true
        loadPath: ["node_modules/foundation-sites/scss"]
      build:
        files:
          "build/style.css": "app/assets/stylesheets/style.sass"
    cssmin:
      options:
        keepSpecialComments: 1
      compress:
        files:
            'build/style.css': ['build/style.css']
    browserify:
      site:
        files:
          "build/javascripts/theme.js": ["app/assets/javascripts/theme.coffee"]
        options:
          transform: ["coffeeify"]
    uglify:
      options:
        banner: '/*! <%= pkg.name %> v<%= pkg.version %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
        report: 'gzip'
      dist:
        files:
          'build/javascripts/theme.js': 'build/javascripts/theme.js'
    copy:
      build:
        files: [
          {expand: true, flatten: true, src: ['app/templates/**'], dest: 'build/', filter: 'isFile'}
          {expand: true, flatten: true, src: ['app/functions/**'], dest: 'build/', filter: 'isFile'}
          {expand: true, flatten: true, cwd: "app/assets/", src: ['images/**'], dest: 'build/images', filter: "isFile"}
          {expand: true, flatten: true, cwd: "app/assets/", src: ['images/screenshot.png'], dest: 'build/'}
        ]
    watch:
      options:
        livereload: true
      sass:
        files: ["app/assets/stylesheets/**/*.sass", "app/assets/stylesheets/**/*.scss"]
        tasks: ["sass"]
      browserify:
        files: ["app/assets/javascripts/**/*.coffee"]
        tasks: ["browserify"]
      php:
        files: ["app/templates/**/*.php", "app/functions/**/*.php"]
        tasks: ["copy"]
    clean: ['build', "package"]
    zip:
      'package/package.zip': ['build/**/*']
    bower:
      build:
        dest: "build/javascripts"
    rsync:
      production:
        options:
          src: "build/"
          dest: "/home/montaasi/www-data/wp-content/themes/montage"
          host: "montaasi@otax.ayy.fi"
          recursive: true
          delete: true

  grunt.registerTask "default", ["clean", "bower", "browserify", "copy", "sass", "watch"]
  grunt.registerTask "package", ["clean", "bower", "browserify", "copy", "sass", "cssmin", "uglify", "zip"]
  grunt.registerTask "build", ["clean", "bower", "browserify", "copy", "sass", "cssmin", "uglify"]
  grunt.registerTask "deploy", ["build", "rsync:production"]
