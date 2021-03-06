var gulp = require("gulp")
var less = require("gulp-less")
var watch = require("gulp-watch")
var gutil = require("gulp-util")
var del = require("del")
var browserify = require('gulp-browserify')
var livereload = require('gulp-livereload')
var connect = require('gulp-connect')
var rest = require('connect-rest')
var babelify = require("babelify")

var uglify = require('gulp-uglify')
var minifyHTML = require('gulp-minify-html')
var uglifycss = require ('gulp-uglifycss')

var src = {
  root: "frontend",
  // 样式和逻辑都只编译入口文件
  styles: "frontend/styles/*.less",
  scripts: "frontend/scripts/*.js",
  html: "frontend/*.html",
  lib: "frontend/lib/**/*",
  assets: "frontend/assets/**/*"
}

var dist = {
  root: "public/statics/",
  styles: "public/statics/styles",
  scripts: "public/statics/scripts",
  html: "public/statics"
}

function logError(err) {
  console.log(err)
}

/**
 * Default Gulp Task.
 */
gulp.task("default", [
  "clean",
  "copy",
  "html",
  "styles",
  "scripts",
  "connect",
  "test",
  "watch"
])

gulp.task("clean", function() {
  del.sync(dist.root)
})

gulp.task("copy", function() {
  gulp.src(["bower_components/**/*"])
    .pipe(gulp.dest(dist.root + "/lib"))
  gulp.src(src.lib)
    .pipe(gulp.dest(dist.root + "/lib"))
  gulp.src(src.assets)
    .pipe(gulp.dest(dist.root + "/assets"))
})

gulp.task("html", function() {
  gulp.src(src.html)
    .pipe(gulp.dest(dist.html))
    .on("end", reload)
})

gulp.task("styles", function() {
  gulp.src(src.styles)
    .pipe(less())
    .on("error", logError)
    .pipe(gulp.dest(dist.styles))
    .on("end", reload)
})

gulp.task("scripts", function() {
  gulp.src(src.scripts, {})
    .pipe(browserify({
      debug: true,
      transform: ["babelify", "brfs"]
    }))
    .on("error", logError)
    .pipe(gulp.dest(dist.scripts))
    .on("end", reload)
})

gulp.task("connect", function() {
  livereload()
})

gulp.task("test", function() {
  console.log("should run test!..")
})

gulp.task("watch", function() {
  livereload.listen()
  gulp.watch(src.html, ["html"])
  gulp.watch("frontend/styles/**/*", ["styles"])
  gulp.watch("frontend/scripts/**/*", ["scripts"])
  gulp.watch(["resources/**/*", "app/**/*"], function() {
    reload()
  })
})

function reload() {
  livereload.reload()
}

/**
 * Build for distribution.
 */
gulp.task("build", function() {
  del.sync("build")

  // Assets
  gulp.src(["frontend/lib/**/*"])
    .pipe(gulp.dest(dist.root + "/lib"))
  gulp.src(["assets/**/*"])
    .pipe(gulp.dest(dist.root + "/assets"))

  // HTML
  gulp.src(src.html)
    .pipe(minifyHTML())
    .pipe(gulp.dest(dist.html))

  // Build styles
  gulp.src(src.styles)
    .pipe(less())
    .pipe(uglifycss())
    .pipe(gulp.dest(dist.styles))

  // Build scripts
  gulp.src(src.scripts)
    .pipe(browserify({
      debug: true,
      transform: ["babelify", "brfs"]
    }))
    .pipe(uglify())
    .pipe(gulp.dest(dist.scripts))
})
