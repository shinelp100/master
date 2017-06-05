import looseEqual from "./looseEqual";

function looseIndexOf (arr, val) {
    for (var i = 0; i < arr.length; i++) {
        if (looseEqual(arr[i], val)) { return i }
    }
    return -1
}

export default looseIndexOf;