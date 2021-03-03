--lister les jeux dont le nom contient 'Mario'
select * from gamepedia.`game` where name like '%mario%';
-- lister les compagnies installées au Japon,
select name from gamepedia.`company` where location_country = 'Japan';
-- lister les plateformes dont la base installée est >= 10 000 000,
select * from gamepedia.`platform` where install_base >= 10000000;
--lister 442 jeux à partir du 21173ème,
select * from gamepedia.`game` Limit 442 offset 21173;
-- lister les jeux, afficher leur nom et deck, en paginant (taille des pages : 500)
select name, deck from gamepedia.`game` Limit 500 offset 0;