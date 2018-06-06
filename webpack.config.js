const path = require("path")
const UglifyJSPlugin = require("uglifyjs-webpack-plugin")
const dev = process.env.NODE_ENV === "dev"

let config = {
    entry: "./front/js/app.js",
    mode: 'development',
    watch: dev,
    output: {
        path: path.resolve("./public/js"),
        filename: "bundle.js"
    },
    module: {
        rules: [
            {
                test:/\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ]
    },
    plugins: []
};

if (!dev) {
    config.mode = 'production'
    config.plugins.push(new UglifyJSPlugin())
}

module.exports = config
