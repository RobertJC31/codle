alphaChar = 'abcdefghijklmnopqrstuvwxyz';

function generateCode(allowAlpha, allow5Digits) {
    let code = [];
    let alphas = 0;
    let numDigits = 4;

    if (allow5Digits === true) {
        numDigits = 5;
    }

    for (let i = 0; i < numDigits; i++) {
        if (((alphas <= 1) && (Math.random() < 0.5)) && allowAlpha) {
            code.push(alphaChar.charAt(Math.floor(Math.random() * 26)));
            alphas++;
        } else {
            code.push(Math.floor(Math.random() * 10));
        }
    }
    return code;
}