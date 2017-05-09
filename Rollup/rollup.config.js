/**
    * Created by lw on 2017/4/12.
    */
// rollup.config.js
import json from 'rollup-plugin-json';
import resolve from 'rollup-plugin-node-resolve';
import babel from 'rollup-plugin-babel';
// import uglify from 'rollup-plugin-uglify';

export default {
    entry: 'src/main.js',
    format: 'cjs',
    plugins: [
        json() ,
        resolve() ,
        babel({
            exclude: 'node_modules/**' // only transpile our source code
        })
        // uglify()
    ],
    dest: 'dist/bundle.js',
    // sourceMap: true
};