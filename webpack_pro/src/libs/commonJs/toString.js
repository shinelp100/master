/**
 * Convert a value to a string that is actually rendered.
 */
function toString (val) {
    return val == null
        ? ''
        : typeof val === 'object'
            ? JSON.stringify(val, null, 2)
            : String(val)
}

export default toString;