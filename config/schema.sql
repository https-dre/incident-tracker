CREATE TABLE IF NOT EXISTS players (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_steam VARCHAR(25) NOT NULL UNIQUE,
    id_discord VARCHAR(50) NOT NULL UNIQUE,
    panel_nickname VARCHAR(255),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    coins INT DEFAULT 0,
    demerit_points INT DEFAULT 0,
    CONSTRAINT demerit_points_gt_0 CHECK (demerit_points >= 0)
);

CREATE TABLE IF NOT EXISTS incidents (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    happenedIn TIMESTAMP NOT NULL,
    severity INT NOT NULL,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    playerId INT NOT NULL,
    FOREIGN KEY (playerId) REFERENCES players(id) ON DELETE CASCADE
);