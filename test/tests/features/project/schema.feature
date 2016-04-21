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
        Et le JSON devrait être valide avec ce schéma:
        """
        {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "description": {
                    "type": "string"
                }
            },
            "required": ["id", "description"]
        }
        """
