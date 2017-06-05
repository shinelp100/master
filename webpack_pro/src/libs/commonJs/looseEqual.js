/**
 * Check if two values are loosely equal - that is,
 * if they are plain objects, do they have the same shape?
 */
import isObject from "./isObject";

function looseEqual (a, b) {
    var isObjectA = isObject(a);
    var isObjectB = isObject(b);
    if (isObjectA && isObjectB) {
        try {
            return JSON.stringify(a) === JSON.stringify(b)
        } catch (e) {
            // possible circular reference
            return a === b
        }
    } else if (!isObjectA && !isObjectB) {
        return String(a) === String(b)
    } else {
        return false
    }
}

export default looseEqual;