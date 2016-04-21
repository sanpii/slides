# language: fr
Fonctionnalité:

    Contexte:
        Étant donné j'ajoute l'entête "PRIVATE-TOKEN" égale à "bJwB3oPSLjEFcBMQmFte"

    Scénario:
        Quand j'envoie une requête POST sur "/api/v3/projects" avec les paramètres :
            | key  | value |
            | name | test  |
        Alors la réponse devrait être du JSON
        Et le code de status de la réponse devrait être 201
        Et l'entête "Content-Type" devrait être égal à "application/json"
