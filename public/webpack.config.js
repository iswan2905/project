var path = require('path')
var webpack = require('webpack')

module.exports = {
  entry: './src/main.js',
  output: {
    path: path.resolve(__dirname, './dist'),
    publicPath: '/dist/',
    filename: 'build.js'
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {
            // Since sass-loader (weirdly) has SCSS as its default parse mode, we map
            // the "scss" and "sass" values for the lang attribute to the right configs here.
            // other preprocessors should work out of the box, no loader config like this necessary.
            'scss': 'vue-style-loader!css-loader!sass-loader',
            'sass': 'vue-style-loader!css-loader!sass-loader?indentedSyntax'
          }
          // other vue-loader options go here
        }
      },
      {
        test: /\.css$/,
        loader: "style-loader!css-loader?sourceMap"
        //loader: "style-loader!css-loader?sourceMap"
      },
      { test: /vendor\/.+\.(jsx|js)$/,
        loader: 'imports?jQuery=jquery,$=jquery,this=>window'
      },
      {
        test: /\.(html)$/,
        use: {
          loader: 'html-loader',
          options: {
            attrs: [':data-src']
          }
        }
      },
      {
          test: /\.scss$/,
          use: [{
            loader: "style-loader" // creates style nodes from JS strings
          }, {
            loader: "css-loader", // translates CSS into CommonJS
            options:{
              sourceMap: true
            }
          }, {
            loader: "sass-loader", // compiles Sass to CSS
            options:{
              sourceMap: true
            }

          }]
      },
      {
        test: /\.js$/,
        loader: 'babel-loader',
      //  include: [resolve('src'), resolve('test')],
        exclude: /node_modules/
      },
      {
        //test: /\.(png|jpg|gif|svg)$/,
        test: /.(png|jpg|jpeg|gif|svg|woff|woff2|ttf|eot)$/,
        loader: 'file-loader',
        options: {
          name: '[name].[ext]?[hash]'
        }
      }
    ]
  },
  resolve: {
    alias: {
      //extensions: ['.js', '.vue', '.json'],
      'vue$': 'vue/dist/vue.esm.js',
     // '@': resolve('src'),
      'jquery': 'jquery/src/jquery.js'
    }
  },
  devServer: {
    historyApiFallback: true,
    noInfo: true
  },
  performance: {
    hints: false
  },
  devtool: '#eval-source-map'
}

if (process.env.NODE_ENV === 'production') {
  module.exports.devtool = '#source-map'
  // http://vue-loader.vuejs.org/en/workflow/production.html
  module.exports.plugins = (module.exports.plugins || []).concat([
    new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: '"production"'
      }
    }),
    new webpack.optimize.UglifyJsPlugin({
      sourceMap: true,
      compress: {
        warnings: true
      }
    }),
    new webpack.LoaderOptionsPlugin({
      minimize: true
    }),

    new webpack.ProvidePlugin({
      Alert: "exports?Alert!bootstrap/js/dist/alert",
      Button: "exports?Button!bootstrap/js/dist/button",
      Collapse: "exports?Collapse!bootstrap/js/dist/collapse",
      Dropdown: "exports?Dropdown!bootstrap/js/dist/dropdown",
      Modal: "exports?Modal!bootstrap/js/dist/modal",
      Popover: "exports?Popover!bootstrap/js/dist/popover",
      Scrollspy: "exports?Scrollspy!bootstrap/js/dist/scrollspy",
      Tab: "exports?Tab!bootstrap/js/dist/tab",
      Tooltip: "exports?Tooltip!bootstrap/js/dist/tooltip",
      Util: "exports?Util!bootstrap/js/dist/util",
    })

  ])
}
