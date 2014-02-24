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
      build:
        files:
          "build/style.css": "app/assets/stylesheets/style.sass"
    cssmin:
      options:
        banner: '/*! <%= pkg.name %> v<%= pkg.version %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      compress:
        files:
            'build/style.min.css': ['build/style.css']
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
          'build/javascripts/theme.min.js': 'build/javascripts/theme.js'
    copy:
      build:
        files: [
          {expand: true, flatten: true, src: ['app/templates/**'], dest: 'build/', filter: 'isFile'}
          {expand: true, flatten: true, src: ['app/functions/**'], dest: 'build/', filter: 'isFile'}
          {expand: true, flatten: true, cwd: "app/assets/", src: ['images/**'], dest: 'build/images', filter: "isFile"}
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
    clean: ['build']

  grunt.registerTask "default", ["clean", "browserify", "copy", "sass", "cssmin", "uglify", "watch"]
