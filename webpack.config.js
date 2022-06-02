const path = require('path');
const copyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.join(__dirname, 'build'),
    filename: 'bundle.js',
  },
  module: {
    rules: [{ test: /\.js$/, exclude: /node_modules/, loader: 'babel-loader' }],
  },
  plugins: [
    new copyWebpackPlugin({
      patterns: [{ from: 'public', to: '' }],
    }),
  ],
  devtool: 'source-map',
};
