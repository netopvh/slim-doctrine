const path = require("path")
const UglifyJSPlugin = require("uglifyjs-webpack-plugin")
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const dev = process.env.NODE_ENV === "dev"

let cssLoaders = [
  {loader: 'css-loader', options: {minimize: !dev}}
]

let config = {
    entry: "./front/assets/app.js",
    mode: 'development',
    watch: dev,
    output: {
        path: path.resolve("./public/js"),
        filename: "bundle.js"
    },
    devtool: dev ? "cheap-module-eval-source-map" : false,
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
            }, {
                test:/\.css$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: cssLoaders
                })
            }, {
                test:/\.(scss|sass)$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [...cssLoaders, 'sass-loader']
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: "[name].css"
        }),
    ]
};

if (!dev) {
    config.mode = 'production'
    config.plugins.push(new UglifyJSPlugin())
}

module.exports = config
