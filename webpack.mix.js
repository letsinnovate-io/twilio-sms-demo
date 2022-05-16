const mix = require("laravel-mix");
require("dotenv").config();

let devProxy = process.env.EN_US_GCT_SITE_URL;
//let devProxy = process.env.EN_US_SITE_URL;

mix
    .setPublicPath("public")
    .browserSync({
        browser: "Firefox Developer Edition",
        proxy: devProxy,
        files: [
            "templates/**/*.twig",
            "src/mix/theme.css",
            "src/mix/theme.js",
        ]
    })
    .js("src/mix/theme.js", "public/theme/")
    .vue()
    .postCss(
        "src/mix/theme.css", "public/theme/",
        [require("tailwindcss")("tailwind.config.js"),]
    )

// versioning in Production only
if (mix.inProduction()) {
    mix.version();
}