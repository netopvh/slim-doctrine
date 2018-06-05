var webpack = require('webpack');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
module.exports = {
    context: __dirname + '/front/js',
    entry: "./index.js",
    output: {
        path: __dirname+ '/public/js',
        filename: "bundle.js"
    },
    // plugins: [
        optimization: {
            minimizer: [
                new UglifyJSPlugin()
            ]
        }
    // ]
};
