/**
 * Created by lw on 2017/4/12.
 */
// src/main.js
import foo from './foo';
import jquery from './jquery';
// import answer from 'the-answer';

export default () => {
    // console.log('the answer is ' + answer);
    console.log('foo=' + foo);
    jquery(body).css({backgroundColor:"#f96"});
}