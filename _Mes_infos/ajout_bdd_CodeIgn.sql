CREATE TABLE news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

INSERT INTO news (title,slug,text) 
VALUES 
('titre1','article1','texte1 : Sed1 q1uaerat qui1a ut repudian1dae quae1 et dolorem dolorem'),
('titre2','article2','texte2 : Sed2 quaerat2 quia ut rep2udian2dae quae et do2lorem dolorem'),
('titre3','article3','texte3 : Sed3 quaer3at quia u3t repu3diandae quae e3t dolor3em dolorem'),
('titre4','article4','texte4 : Sed4 quaera4t quia ut4 repudi4andae q4uae et dolo4rem dolor4em'),
('titre5','article5','texte5 : Sed5 qu5aerat qui5a ut repu5diandae qua5e et dol5orem dol5orem');

