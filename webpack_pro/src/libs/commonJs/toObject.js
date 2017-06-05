/**
 * Merge an Array of Objects into a single Object.
 */
import extend from "./extend";

function toObject (arr) {
    var res = {};
    for (var i = 0; i < arr.length; i++) {
        if (arr[i]) {
            extend(res, arr[i]);
        }
    }
    return res
}

export default toObject;