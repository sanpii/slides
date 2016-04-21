# language: fr
Fonctionnalité: Récupérer les informations d’un projet sur gitlab.com
    Afin d’afficher un tableau de bord allégé de mes projets
    En tant que propriétaire du projet
    J’ai besoin des informations d’un projet au format JSON

    Contexte:
        Étant donné j'ajoute l'entête "PRIVATE-TOKEN" égale à "bJwB3oPSLjEFcBMQmFte"

    Scénario: Récupérer les informations d’un projet au format JSON
        Quand j'envoie une requête GET sur "/api/v3/projects/732426"
        Alors le code de status de la réponse devrait être 200
        Et l'entête "Content-Type" devrait être égal à "application/json"
        Et la réponse devrait être du JSON
        Et le JSON devrait être égal à :
        """
        {
            "id": 732426,
            "description": "",
            "default_branch": "master",
            "tag_list": [],
            "public": true,
            "archived": false,
            "visibility_level": 20,
            "ssh_url_to_repo": "git@gitlab.com:behatch\/contexts.git",
            "http_url_to_repo": "https:\/\/gitlab.com\/behatch\/contexts.git",
            "web_url": "https:\/\/gitlab.com\/behatch\/contexts",
            "name": "contexts",
            "name_with_namespace": "behatch \/ contexts",
            "path": "contexts",
            "path_with_namespace": "behatch\/contexts",
            "issues_enabled": true,
            "merge_requests_enabled": true,
            "wiki_enabled": true,
            "builds_enabled": true,
            "snippets_enabled": false,
            "created_at": "2016-01-06T17:57:44.883Z",
            "last_activity_at": "2016-03-04T09:50:52.885Z",
            /* ... */
        }
        """
