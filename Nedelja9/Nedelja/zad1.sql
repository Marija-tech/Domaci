
INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 012, 2, 200, '2021-01-05'),
        (NULL, 789, 4, 70, '2021-01-05'),
        (NULL, 123, 7, 50, '2021-01-05');

INSERT INTO `prodaja`(`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 012, 50, 200, '2021-06-16');

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 012, 20, 200,'2021-06-17');

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 012, 40, 250,'2021-06-17');

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 012, 10, 220,'2021-06-17');

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) 
VALUES  (NULL, 123, 30, 50,'2021-01-05');

DELETE FROM `prodaja` WHERE `barkod=012` AND `datum = '2021-06-16'`;

UPDATE `prodaja` SET `cena=cena*0.1` WHERE `datum='2021-06-17'`;

SELECT `naziv`, count(*) AS `ukupna_kolicina`, sum(`kolicina`) AS `zbir`
FROM `prodaja`
GROUP BY `naziv`;

SELECT `datum`, count(*) AS `ukupna_kolicina`, sum(`kolicina`) AS `zbir` 
FROM `prodaja` 
GROUP BY `datum`