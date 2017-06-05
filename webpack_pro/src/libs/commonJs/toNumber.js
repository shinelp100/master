/**
 * Convert a input value to a number for persistence.
 * If the conversion fails, return original string.
 */
function toNumber (val) {
    var n = parseFloat(val);
    return isNaN(n) ? val : n
}

export default toNumber;