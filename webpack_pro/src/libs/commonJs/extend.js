/**
 * Mix properties into target object.
 */
function extend (to, _from) {
    for (var key in _from) {
        to[key] = _from[key];
    }
    return to
}
export default extend;