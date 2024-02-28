const code = [];
alphaChar = 'abcdefghijklmnopqrstuvwxyz';

function generateCode() {
    let alphas = 0;
    for (let i = 0; i < 5; i++) {
        if (((alphas <= 1) && (Math.random() < 0.5))) {
            code.push(alphaChar.charAt(Math.floor(Math.random() * 26)));
            alphas++;
        } else {
            code.push(Math.floor(Math.random() * 10));
        }
    }
}

generateCode();
console.log(code);