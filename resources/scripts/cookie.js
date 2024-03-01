function setCookie(cookieName, cookieValue, expirationDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
}

function getCookie(cookieName) {
    let name = cookieName + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let cookieArray = decodedCookie.split(';');
    for (let i = 0; i < cookieArray.length; i++) {
        let cookie = cookieArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return "";
}

function checkCookie(cookieName) {
    let cookieValue = getCookie(cookieName);
    return cookieValue !== "";
}

function deleteCookie(cookieName) {
    document.cookie = cookieName + "=; expires=Sat, 31 May 2003 00:00:00 UTC; path=/;";
}