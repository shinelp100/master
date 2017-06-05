function idcard(s) {
    return /^\d{15}(\d{2}(\d|x))?$/i.test(s);
}

export default idcard;
