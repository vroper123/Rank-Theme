const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path = require('path');
module.exports = {
  watch: true,
  entry: {
    theme: ["./src/theme.scss", "./src/theme.js"],
    // hippo: ["./src/yoyo.scss"]
  },
   // ...
   output: {
    path: path.resolve(process.cwd(), 'assets'), // should be an absolute path
    filename: 'js/[name].js', // relative to output.path
  },
  plugins: [
    new MiniCssExtractPlugin({
        filename: "css/[name].css", // relative to output.path,
    }),
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
    ],
  },
  mode: "production"
};
