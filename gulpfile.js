const { src, dest, task, watch, series, parallel } = require("gulp");
const options = require("./package.json").options;
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const postcss = require("gulp-postcss");
const purify = require("gulp-purifycss");
const uglify = require("gulp-uglify");
const cleanCSS = require("gulp-clean-css");
const del = require("del");
const logSymbols = require("log-symbols");
const fileinclude = require("gulp-file-include");
const cache = require("gulp-cache");

// Завантаження попереднього перегляду в браузері під час розробки
task("livepreview", (done) => {
  browserSync.init({
    server: {
      baseDir: options.paths.dist.base,
    },
    port: 8080,
    https: true,
    notify: false,
    open: false,
  });
  done();
});

// Функції перезавантаження, які запускають перезавантаження браузера
function previewReload(done) {
  console.log("\n\t" + logSymbols.info, "Перезавантаження попереднього перегляду.\n");
  browserSync.reload();
  cache.clearAll(done);
  done();
}

task("dev-html", () => {
  return src(options.paths.src.base + "/views/*.html")
    .pipe(fileinclude({ prefix: "@" }))
    .pipe(dest(options.paths.dist.base));
});

task("build-html", () => {
  return src(options.paths.src.base + "/views/*.html")
    .pipe(fileinclude({ prefix: "@" }))
    .pipe(dest(options.paths.build.base));
});

// Компіляція стилів
task("dev-styles", () => {
  return src(options.paths.src.css + "/**/*")
    .pipe(sass().on("error", sass.logError))
    .pipe(
      postcss([
        require("postcss-import"),
        require("tailwindcss")(options.config.tailwindjs),
        require("autoprefixer"),
      ])
    )
    .pipe(concat({ path: "style.css" }))
    .pipe(dest(options.paths.dist.css));
});

// Компіляція стилів
task("build-styles", () => {
  return src(options.paths.dist.css + "/**/*")
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest(options.paths.build.css));
});

// Об'єднання всіх файлів скриптів в один файл
task("dev-scripts", () => {
  return src([
    options.paths.src.js + "/libs/**/*.js",
    options.paths.src.js + "/**/*.js",
  ])
    .pipe(concat({ path: "scripts.js" }))
    .pipe(dest(options.paths.dist.js));
});

// Об'єднання всіх файлів скриптів в один файл
task("build-scripts", () => {
  return (
    src([
      options.paths.src.js + "/libs/**/*.js",
      options.paths.src.js + "/**/*.js",
    ])
      .pipe(concat({ path: "scripts.js" }))
      //    .pipe(uglify())
      .pipe(dest(options.paths.build.js))
  );
});

task("dev-imgs", (done) => {
  src(options.paths.src.img + "/**/*").pipe(dest(options.paths.dist.img));
  done();
});

task("build-imgs", (done) => {
  src(options.paths.src.img + "/**/*").pipe(dest(options.paths.build.img));
  done();
});

// Спостереження за змінами у файлах
task("watch-changes", (done) => {
  // Спостереження за редагуванням файлів конфігурації tailwind
  watch(options.config.tailwindjs, series("dev-styles", previewReload));

  // Спостереження за редагуванням HTML файлів
  watch(
    options.paths.src.base + "/views/**/*.html",
    series("dev-styles", "dev-html", previewReload)
  );

  // Спостереження за редагуванням CSS файлів
  watch(options.paths.src.css + "/**/*", series("dev-styles", previewReload));

  // Спостереження за редагуванням JS файлів
  watch(
    options.paths.src.js + "/**/*.js",
    series("dev-scripts", previewReload)
  );

  // Спостереження за оновленням зображень
  watch(options.paths.src.img + "/**/*", series("dev-imgs", previewReload));

  console.log(
    "\n\t" + logSymbols.info,
    "Спостереження за змінами у файлах.\n"
  );

  done();
});

// Очищення папки dist для нового старту
task("clean:dist", () => {
  console.log(
    "\n\t" + logSymbols.info,
    "Очищення папки dist для нового старту.\n"
  );
  return del(["dist"]);
});

// Очищення папки build для нового старту
task("clean:build", () => {
  console.log(
    "\n\t" + logSymbols.info,
    "Очищення папки build для нового старту.\n"
  );
  return del(["build"]);
});

// Серія завдань для запуску команди розробки
task(
  "development",
  series(
    "clean:dist",
    "dev-html",
    "dev-styles",
    "dev-scripts",
    "dev-imgs",
    (done) => {
      console.log(
        "\n\t" + logSymbols.info,
        "npm run dev завершено. Файли знаходяться в ./dist\n"
      );
      done();
    }
  )
);

task(
  "optamizedBuild",
  series(
    "clean:build",
    "build-html",
    "dev-styles",
    "build-styles",
    "build-scripts",
    "build-imgs",
    (done) => {
      console.log(
        "\n\t" + logSymbols.info,
        "npm run build завершено. Файли знаходяться в ./build\n"
      );
      done();
    }
  )
);

exports.default = series("development", "livepreview", "watch-changes");
exports.build = series("optamizedBuild");
