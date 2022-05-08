-- MDL
# Heritage
    -- singleTable : toutes les classes qui participent dans la relation seront dans une et une seule table
        personne(id,nom_complet,login,password,role,grade,adresse,matricule,sexe)
    --Joined : on creer autant de tables que de class mere
        --migre comme cles etranger au nivaeu des classes fille
        personne(id_personne,nom_complet,role)
        user(login,password,#personne_id)
        professeur(grade,#personne_id)
        rp(#personne_id)
        ac(#personne_id)
        etudiant() --User n'a pas d'id puisqu'il herite de personne
-- OneToMany -> ManyToOne
    1->* --// OneToMany
    *->1 --// ManyToONe
    MDL => cles du faible au niveau du fort
    annee_scolaire(id,libelle)
    inscription(#annee_id)

    #ManyToOne
    classr(id,libelle,filiere,niveau)
    professeur(#classe_id,personne_id)
create  TABLE personne
(
    id int not null auto_increment primary key,
    nom_complet varchar(100) not null ,
    role varchar (25),
    login varchar (25) unique ,
    password varchar (100),
    matricule varchar (50) unique,
    adresse text,
    sexe varchar(1)
);
--type de requete
-- : mise a jour
    insert
    ,update
    ,delete
-- : non mise a jour; retour des donnees :> objet | tableau
    ,select