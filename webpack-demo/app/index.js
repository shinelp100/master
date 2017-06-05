import _ from 'lodash';
import moment from 'moment';
import indexCss from './index.css';
import index1Css from './index1.css';

console.log(moment().format());

function component () {
    var element = document.createElement('div');

    /* 需要引入 lodash，下一行才能正常工作 */
    element.innerHTML = _.join(['Hello','webpack'], ' ');

    return element;
}

document.body.appendChild(component());