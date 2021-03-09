
select * from seance2.`photo` where idAnnonce = 22;

select * from seance2.`photo` where idAnnonce = 22 & taille_octet >100000;

---Annonce qui ont  - 3 photos
select * from seance2.`annonce` a
join photos p on u.id = p.idAnnonce
group by name
having count(idAnnonce) > 3;

select * from seance2.`annonce` a
join photos p on u.id = p.idAnnonce
group by name
having taille_octet > 100000;
