let userStatsCookieName = "userStats"
let userStats;

function getUserStats() {
    if (!(checkCookie("userStats"))) {
        let defaultStats = JSON.stringify({
            gamesPlayed: 0,
            gamesWon: 0,
            winStreak: 0,
            lastStreakDay: null,
            longestStreak: 0,
            guessDistribution: JSON.stringify({
                oneGuess: 0,
                twoGuesses: 0,
                threeGuesses: 0,
                fourGuesses: 0,
                fiveGuesses: 0
            }),
            hardGames: 0,
            assistGames: 0
        });
        setCookie(userStatsCookieName, defaultStats, 365);
        userStats = JSON.parse(defaultStats);
    } else {
        userStats = JSON.parse(getCookie(userStatsCookieName));
    }
    userStats.guessDistribution = JSON.parse(userStats.guessDistribution);
}

function updateUserStats() {
    userStats.guessDistribution = JSON.stringify(userStats.guessDistribution);
    setCookie(userStatsCookieName, JSON.stringify(userStats), 365);
}

