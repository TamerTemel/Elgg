<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
/**
 * Sites
 */

	'item:site:site' => 'Site',
	'collection:site:site' => 'Sites',
	'index:content' => '<p>Bienvenue dans votre site Elgg.</p><p><strong>Astuce :</strong> De nombreux sites utilisent le plugin  <code>activity</code> pour placer un flux d\'activité récente sur cette page.</p>',

/**
 * Sessions
 */

	'login' => "Connexion",
	'loginok' => "Connexion réussie.",
	'loginerror' => "Nous n'avons pas pu vous identifier. Assurez-vous que les informations que vous avez entrées sont correctes et réessayez.",
	'login:empty' => "Identifiant/email et mot de passe sont requis.",
	'login:baduser' => "Impossible de charger votre compte d'utilisateur.",
	'auth:nopams' => "Erreur interne. Aucune méthode d'authentification des utilisateurs n'est installée.",

	'logout' => "Déconnexion",
	'logoutok' => "Déconnexion réussie.",
	'logouterror' => "Impossible de vous déconnecter. Veuillez réessayer.",
	'session_expired' => "Suite à une inactivité prolongée, votre session de connexion a expiré. Veuillez <a href='javascript:location.reload(true)'>recharger</a> la page pour vous connecter.",
	'session_changed_user' => "Vous êtes actuellement connecté(e) avec un autre compte utilisateur. Vous devriez <a href='javascript:location.reload(true)'>recharger</a> la page.",

	'loggedinrequired' => "Vous devez vous connecter pour voir cette page.",
	'loggedoutrequired' => "Vous devez vous déconnecter pour voir cette page.",
	'adminrequired' => "Vous devez être administrateur pour voir cette page.",
	'membershiprequired' => "Vous devez être membre de ce groupe pour voir cette page.",
	'limited_access' => "Vous n'avez pas la permission de consulter cette page.",
	'invalid_request_signature' => "L'URL de la page à laquelle vous essayez d'accéder est invalide ou a expiré",

/**
 * Errors
 */

	'exception:title' => "Erreur Fatale.",
	'exception:contact_admin' => 'Une erreur irrécupérable s\'est produite et a été enregistrée dans le journal. Veuillez SVP contacter l\'administrateur du site avec les informations suivantes :',

	'actionundefined' => "L'action demandée (%s) n'est pas définie dans le système.",
	'actionnotfound' => "Le fichier d'action pour %s n'a pas été trouvé.",
	'actionloggedout' => "Désolé, vous ne pouvez pas effectuer cette action sans vous connecter.",
	'actionunauthorized' => 'Vous n\'avez pas l\'autorisation d\'effectuer cette action',

	'ajax:error' => 'Une erreur est survenue lors d\'un appel AJAX. Peut-être que la connexion avec le serveur est perdue.',
	'ajax:not_is_xhr' => 'Vous ne pouvez pas accéder directement aux vues AJAX',
	'ajax:pagination:no_data' => 'Aucune nouvelle donnée de page trouvée',
	'ajax:pagination:load_more' => 'Charger la suite',

	'ElggEntity:Error:SetSubtype' => 'Utiliser %s à la place du setter magique pour "subtype"',
	'ElggEntity:Error:SetEnabled' => 'Utiliser %s à la place du setter magique pour "enabled"',
	'ElggUser:Error:SetAdmin' => 'Utiliser %s à la place du setter magique pour "admin"',
	'ElggUser:Error:SetBanned' => 'Utiliser %s à la place du setter magique pour "banned"',

	'PluginException:MisconfiguredPlugin' => "Le plugin %s (guid : %s) est mal configuré. Il a été désactivé. Veuillez rechercher dans la documentation les causes possibles (http://learn.elgg.org/).",
	'PluginException:CannotStart' => '%s (guid : %s) ne peut pas démarrer et a été désactivé. Raison : %s',
	'PluginException:InvalidID' => "%s est un ID de plugin invalide.",
	'PluginException:InvalidPath' => "%s est un chemin de plugin invalide.",
	'PluginException:InvalidManifest' => 'Fichier manifest.xml invalide pour le plugin %s',
	'PluginException:InvalidPlugin' => '%s n\'est pas un plugin valide.',
	'PluginException:InvalidPlugin:Details' => '%s n\'est pas un plugin valide: %s',
	'PluginException:NullInstantiated' => 'ElggPlugin ne peut pas être instancié vide. Vous devez passer un GUID, un ID de plugin, ou un chemin complet.',
	'ElggPlugin:MissingID' => 'ID du plugin manquant (guid %s)',
	'ElggPlugin:NoPluginComposer' => 'Fichier composer.json manquant pour l\'ID de plugin %s (guid %s)',
	'ElggPlugin:StartFound' => 'Pour l\'ID de plugin %s un fichier start.php a été trouvé. Ceci pourrait indiquer une version de plugin non supportée.',
	'ElggPlugin:IdMismatch' => 'Le nom du répertoire de ce plugin doit être renommé en "%s" pour correspondre au nom du projet projectname défini dans le composer.json du plugin.',
	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Le fichier requis "%s" est manquant.',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Le fichier manifest.xml contient un type de dépendance invalide : "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Le fichier manifest.xml contient un type de fournisseur "%s" invalide.',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Dépendance %s invalide "%s" dans le plugin %s. Les plugins ne peuvent pas être en conflit avec, ni avoir besoin de quelque chose qu\'ils fournissent eux-même !',
	'ElggPluginPackage:InvalidPlugin:ConflictsWithPlugin' => 'Conflit avec le plugin : %s',
	'ElggPluginPackage:InvalidPlugin:UnreadableConfig' => 'Le fichier du plugin "elgg-plugin.php" est présent mais illisible.',
	'ElggPlugin:Error' => 'Erreur de plugin',
	'ElggPlugin:Exception:CannotIncludeFile' => 'Impossible d\'inclure %s pour le plugin %s (GUID : %s) sur %s. Vérifiez les autorisations !',
	'ElggPlugin:Exception:IncludeFileThrew' => 'Envoi d\'une exception comprenant %s pour le plugin %s (guid: %s) à %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Impossible d\'ouvrir le répertoire des vues du plugin %s (GUID : %s) sur %s. Vérifiez les autorisations !',
	'PluginException:NoPluginName' => "Le nom du plugin n'a pas pu être trouvé",
	'PluginException:ParserError' => 'Erreur d\e syntaxe  dans le fichier manifest.xml avec la version %s de l\'API dans le plugin %s.',
	'PluginException:NoAvailableParser' => 'Impossible de trouver un analyseur syntaxique du fichier manifest.xml pour l\'API version %s dans le plugin %s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "L'attribut requis \"%s\" est manquant dans le fichier manifest.xml pour le plugin %s.",
	'ElggPlugin:InvalidAndDeactivated' => '%s est un plugin invalide et a été désactivé.',
	'ElggPlugin:activate:BadConfigFormat' => 'Le fichier du plugin "elgg-plugin.php" n\'a pas renvoyé un tableau sérialisable.',
	'ElggPlugin:activate:ConfigSentOutput' => 'Le fichier du plugin "elgg-plugin.php" a retourné une valeur de sortie.',

	'ElggPlugin:Dependencies:ActiveDependent' => 'Il existe d\'autres plugins qui répertorient %s en tant que dépendance. Vous devez désactiver les plugins suivants avant de désactiver celui-ci : %s',
	'ElggPlugin:Dependencies:MustBeActive' => 'Doit être actif',
	'ElggPlugin:Dependencies:Position' => 'Position',

	'ElggMenuBuilder:Trees:NoParents' => 'Des entrées de menu ont été trouvées sans lien avec un parent',
	'ElggMenuBuilder:Trees:OrphanedChild' => 'L\'entrée de menu [%s] a été trouvée avec un parent manquant [%s]',
	'ElggMenuBuilder:Trees:DuplicateChild' => 'L\'entrée de menu [%s] est enregistrée plusieurs fois',

	'RegistrationException:EmptyPassword' => 'Les champs du mot de passe ne peuvent pas être vides',
	'RegistrationException:PasswordMismatch' => 'Les mots de passe doivent correspondre',
	'LoginException:BannedUser' => 'Votre compte a été désactivé sur ce site et vous ne pouvez plus vous y connecter',
	'LoginException:UsernameFailure' => 'Nous n\'avons pas pu vous connecter. Vérifiez votre identifiant ou votre email et votre mot de passe.',
	'LoginException:PasswordFailure' => 'Impossible de vous connecter. Vérifiez votre identifiant ou votre email et votre mot de passe.',
	'LoginException:AccountLocked' => 'Votre compte a été verrouillé suite à un trop grand nombre d\'échecs de connexion.',
	'LoginException:ChangePasswordFailure' => 'Échec de la vérification du mot de passe actuel.',
	'LoginException:Unknown' => 'Nous ne pouvons pas vous connecter à cause d\'une erreur inconnue.',
	'LoginException:AdminValidationPending' => "Votre compte doit être validé par un administrateur du site avant que vous puissiez l'utiliser. Vous serez notifié quand votre compte sera validé.",
	'LoginException:DisabledUser' => "Votre compte a été désactivé. Vous n'avez plus l'autorisation de vous connecter.",

	'UserFetchFailureException' => 'Impossible de vérifier les permissions pour l\'utilisateur user_guid [%s] car l\'utilisateur n\'existe pas.',

	'PageNotFoundException' => 'La page à laquelle essayez d\'afficher n\'existe pas ou vous n\'avez pas les permissions pour y accéder.',
	'EntityNotFoundException' => 'La contenu auquel vous essayez d\'accéder a été supprimé ou vous n\'avez pas les permissions pour y accéder.',
	'EntityPermissionsException' => 'Vous n\'avez pas les permissions suffisantes pour cette action',
	'GatekeeperException' => 'Vous n\'avez pas les permissions pour consulter la page à laquelle vous tentez d\'accéder.',
	'BadRequestException' => 'Mauvaise requête',
	'ValidationException' => 'Les données envoyées ne satisfont pas les exigences, veuillez vérifier votre saisie.',
	'LogicException:InterfaceNotImplemented' => '%s doit implémenter %s',
	
	'Security:InvalidPasswordCharacterRequirementsException' => "Le mot de passe fourni ne correspond pas aux exigences requises",
	'Security:InvalidPasswordLengthException' => "Le mot de passe fourni ne correspond pas à l'exigence de longueur minimale de %s caractères",
	
	'Entity:Subscriptions:InvalidMethodsException' => '%s demande que $methods soit une chaîne de caractères ou un tableau de chaînes de caractères',

	'pageownerunavailable' => 'Attention : Le propriétaire de la page %d n\'est pas accessible.',
	'viewfailure' => 'Erreur interne dans la vue %s',
	'view:missing_param' => "Le paramètre obligatoire \"%s\" est manquant dans la vue %s",
	'changebookmark' => 'Veuillez mettre à jour votre signet pour cette page.',
	'noaccess' => 'La contenu que vous essayiez d\'afficher a été supprimé, ou vous n\'avez pas l\'autorisation d\'y accéder.',
	'error:missing_data' => 'Il manquait des données dans votre requête',
	'save:fail' => 'Erreur lors de l \'enregistrement de vos données. ',
	'save:success' => 'Vos données ont bien été enregistrées',

	'forward:error' => 'Désolé, une erreur est survenue lors de la redirection vers un autre site.',

	'error:default:title' => 'Oups...',
	'error:default:content' => 'Oups... quelque chose est allé de travers.',
	'error:400:title' => 'Mauvaise requête',
	'error:400:content' => 'Désolé, la requête est invalide ou incomplète.',
	'error:403:title' => 'Interdit',
	'error:403:content' => 'Désolé. Vous n\'avez pas l\'autorisation d\'accdéder à cette page.',
	'error:404:title' => 'Page non trouvée',
	'error:404:content' => 'Désolé. Nous n\'arrivons pas à trouver la page que vous demandez.',

	'upload:error:ini_size' => 'Le fichier que vous avez essayé de charger est trop grand.',
	'upload:error:form_size' => 'Le fichier que vous avez essayé de télécharger est trop grand.',
	'upload:error:partial' => 'Le chargement du fichier n\'a pas abouti.',
	'upload:error:no_file' => 'Aucun fichier n\'a été sélectionné.',
	'upload:error:no_tmp_dir' => 'Impossible d\'enregistrer le fichier téléchargé (pas de répertoire temporaire).',
	'upload:error:cant_write' => 'Impossible d\'enregistrer le fichier téléchargé (écriture impossible).',
	'upload:error:extension' => 'Impossible d\'enregistrer le fichier téléchargé (extension).',
	'upload:error:unknown' => 'Le chargement du fichier a échoué.',

/**
 * Table columns
 */
	'table_columns:fromView:admin' => 'Admin',
	'table_columns:fromView:banned' => 'Banni',
	'table_columns:fromView:container' => 'Conteneur (container)',
	'table_columns:fromView:excerpt' => 'Description',
	'table_columns:fromView:link' => 'Nom/Titre',
	'table_columns:fromView:icon' => 'Icône',
	'table_columns:fromView:item' => 'Élément',
	'table_columns:fromView:language' => 'Langue',
	'table_columns:fromView:owner' => 'Propriétaire',
	'table_columns:fromView:time_created' => 'Date de création',
	'table_columns:fromView:time_updated' => 'Date de mise à jour',
	'table_columns:fromView:user' => 'Utilisateur',

	'table_columns:fromProperty:description' => 'Description',
	'table_columns:fromProperty:email' => 'E-mail',
	'table_columns:fromProperty:name' => 'Nom',
	'table_columns:fromProperty:type' => 'Type',
	'table_columns:fromProperty:username' => 'Identifiant',

	'table_columns:fromMethod:getSubtype' => 'Sous-type (subtype)',
	'table_columns:fromMethod:getDisplayName' => 'Nom/Titre',
	'table_columns:fromMethod:getMimeType' => 'Type MIME',
	'table_columns:fromMethod:getSimpleType' => 'Type',

/**
 * User details
 */

	'name' => "Nom affiché",
	'email' => "Adresse email",
	'username' => "Identifiant",
	'loginusername' => "Identifiant ou email",
	'password' => "Mot de passe",
	'passwordagain' => "Mot de passe (confirmation)",
	'admin_option' => "Définir comme administrateur ?",
	'autogen_password_option' => "Générer automatiquement un mot de passe sécurisé ?",

/**
 * Access
 */

	'access:label:private' => "Privé",
	'access:label:logged_in' => "Utilisateurs connectés",
	'access:label:public' => "Public",
	'access:label:logged_out' => "Visiteurs non identifiés",
	'access:label:friends' => "Contacts",
	'access' => "Accès",
	'access:overridenotice' => "Note : en accord avec la politique de confidentialité de ce groupe, ce contenu ne sera accessible qu'aux membres du groupe. ",
	'access:limited:label' => "Limité",
	'access:help' => "Le niveau d'accès",
	'access:read' => "Accès en lecture",
	'access:write' => "Accès en écriture",
	'access:admin_only' => "Seulement les administrateurs",
	'access:missing_name' => "Le nom du niveau d'accès est manquant",
	'access:comments:change' => "Cette discussion n'est actuellement visible que par un public limité. Faites attention à qui vous la partagez.",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Tableau de bord",
	'dashboard:nowidgets' => "Votre tableau de bord vous permet de suivre l'activité et les contenus qui vous intéressent.",

	'widgets:add' => 'Ajouter des widgets',
	'widgets:add:description' => "Cliquez sur un widget ci-dessous pour l'ajouter à la page. Vous pouvez ensuite le déplacer et le configurer selon vos souhaits.<br />Note : certains widgets peuvent être ajoutés plusieurs fois.",
	'widgets:position:fixed' => '(Position fixe sur la page)',
	'widget:unavailable' => 'Vous avez déjà ajouté ce widget',
	'widget:numbertodisplay' => 'Nombre d\'éléments à afficher ',

	'widget:delete' => 'Supprimer %s',
	'widget:edit' => 'Personnaliser ce widget',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'collection:object:widget' => 'Widgets',
	'widgets:save:success' => "La configuration du widget a bien été enregistrée.",
	'widgets:save:failure' => "Un problème est survenu lors de l'enregistrement de la configuration du widget. ",
	'widgets:add:success' => "Le widget a bien été ajouté.",
	'widgets:add:failure' => "Nous n'avons pas pu ajouter votre widget.",
	'widgets:move:failure' => "Nous n'avons pas pu enregistrer la position du nouveau widget.",
	'widgets:remove:failure' => "Impossible de supprimer ce widget",
	'widgets:not_configured' => "Ce widget n'est pas encore configuré",
	
/**
 * Groups
 */

	'group' => "Groupe",
	'item:group' => "Groupes",
	'collection:group' => 'Groupes',
	'item:group:group' => "Groupe",
	'collection:group:group' => 'Groupes',
	'groups:tool_gatekeeper' => "La fonctionnalité demandée n'est actuellement pas activée dans ce groupe",

/**
 * Users
 */

	'user' => "Membre",
	'item:user' => "Membres",
	'collection:user' => 'Membres',
	'item:user:user' => 'Membre',
	'collection:user:user' => 'Membres',
	'notification:user:user:make_admin' => "Envoyer une notification quand un utilisateur reçoit les droits d'administrateur",
	'notification:user:user:remove_admin' => "Envoyer une notification quand les droits d'administrateur d'un utilisateur sont révoqués",
	'notification:user:user:unban' => "Envoyer une notification quand un utilisateur est réintégré (unbanned)",

	'friends' => "Contacts",
	'collection:friends' => '%s des contacts',

	'avatar' => 'Image du profil',
	'avatar:noaccess' => "Vous n'êtes pas autorisé à modifier l\'image du profil de cet utilisateur",
	'avatar:create' => 'Créer l\'image du profil',
	'avatar:edit' => 'Modifier l\'image du profil',
	'avatar:upload' => 'Envoyer une nouvelle image du profil',
	'avatar:current' => 'Image actuelle',
	'avatar:remove' => 'Supprime votre image du profil et restaure l\'icône par défaut',
	'avatar:crop:title' => 'Recadrage de l\'image',
	'avatar:upload:instructions' => "Votre image du profil est affichée sur tout le site. Vous pouvez la changer quand vous le souhaitez. (Formats de fichiers acceptés: GIF, JPG ou PNG)",
	'avatar:create:instructions' => 'Cliquez et faites glisser le carré ci-dessous selon la façon dont vous voulez que votre photo soit recadrée. Un aperçu s\'affiche sur la droite. Lorsque le résultat vous convient, cliquez sur «&nbsp;Créer l\'image du profil&nbsp;». Cette version recadrée sera utilisée sur l\'ensemble du site pour vous représenter.',
	'avatar:upload:success' => 'L\'image du profil a bien été chargée',
	'avatar:upload:fail' => 'Échec du chargement de l\'image du profil',
	'avatar:resize:fail' => 'Le redimensionnement de l\'image a échoué',
	'avatar:crop:success' => 'Le recadrage de l\'image a réussi',
	'avatar:crop:fail' => 'Le recadrage de l\'image a échoué',
	'avatar:remove:success' => 'L\'image du profil a bien été supprimée',
	'avatar:remove:fail' => 'Échec de la suppression de l\'image du profil',
	
	'action:user:validate:already' => "%s a déjà été validé",
	'action:user:validate:success' => "%s a été validé",
	'action:user:validate:error' => "Une erreur est survenue lors de la validation de %s",

/**
 * Feeds
 */
	'feed:rss' => 'Fil RSS pour cette page',
	'feed:rss:title' => 'Flux RSS pour cette page',
/**
 * Links
 */
	'link:view' => 'voir le lien',
	'link:view:all' => 'Voir tout',


/**
 * River
 */
	'river' => "Flux d'activité",
	'river:user:friend' => "%s est maintenant en contact avec  %s",
	'river:update:user:avatar' => '%s a changé son image du profil',
	'river:noaccess' => 'Vous n\'avez pas la permission de voir cet élément.',
	'river:posted:generic' => '%s a publié',
	'riveritem:single:user' => 'un utilisateur',
	'riveritem:plural:user' => 'des utilisateurs',
	'river:ingroup' => 'dans le groupe %s',
	'river:none' => 'Aucune activité',
	'river:update' => 'Mise à jour pour %s',
	'river:delete' => 'Retirer cet élément du flux d\'activité',
	'river:delete:success' => 'L\'élément d\'activité a été supprimé',
	'river:delete:fail' => 'L\'élément d\'activité n\'a pas pu être supprimé',
	'river:delete:lack_permission' => 'Vous n\'avez pas les permissions nécessaires pour supprimer cet élément d\'activité',
	'river:can_delete:invaliduser' => 'Impossible de vérifier canDelete pour le user_guid [%s] car l\'utilisateur n\'existe pas.',
	'river:subject:invalid_subject' => 'Utilisateur invalide',
	'activity:owner' => 'Voir le flux d\'activité',

/**
 * Relationships
 */
	
	'relationship:default' => "%s est en rapport avec %s",

/**
 * Notifications
 */
	'notification:method:email' => 'Email',
	'notification:method:email:from' => '%s (via %s)',
	'notification:method:delayed_email' => 'E-mail différé',
	
	'usersettings:notifications:title' => "Paramètres de notification",
	'usersettings:notifications:users:title' => 'Notifications par utilisateur',
	'usersettings:notifications:users:description' => 'Pour recevoir des notifications de vos contacts (individuellement) lorsqu\'ils publient, cherchez-les ci-dessous et choisissez la ou les méthodes de notification que vous souhaitez utiliser.',
	
	'usersettings:notifications:menu:page' => "Paramètres de notification",
	'usersettings:notifications:menu:filter:settings' => "Configuration",
	
	'usersettings:notifications:default:description' => 'Paramètres de notification par défaut pour les événements du système',
	'usersettings:notifications:content_create:description' => 'Paramètres de notification par défaut pour vos propres publications. Ceci peut provoquer des notifications quand d\'autres personnes y réagissent, par exemple en ajoutant un commentaire',
	'usersettings:notifications:create_comment:description' => "Paramètre de notification par défaut quand vous ajoutez un commentaire, afin de pouvoir suivre la suite de la conversation",

	'usersettings:notifications:timed_muting' => "Désactiver temporairement les notifications",
	'usersettings:notifications:timed_muting:help' => "Si vous ne souhaitez pas recevoir de notifications pendant une certaine période (par exemple pendant des vacances), vous pouvez définir une date de début et de fin pour désactiver temporairement toutes les notifications",
	'usersettings:notifications:timed_muting:start' => "Premier jour",
	'usersettings:notifications:timed_muting:end' => "Dernier jour",
	'usersettings:notifications:timed_muting:warning' => "Vos notifications sont temporairement désactivées",
	
	'usersettings:notifications:save:ok' => "Les paramètres de notification ont bien été enregistrés.",
	'usersettings:notifications:save:fail' => "Il y a eu un problème lors de l'enregistrement des paramètres de notification.",
	
	'usersettings:notifications:subscriptions:save:ok' => "Les abonnements de notification ont bien été enregistrés.",
	'usersettings:notifications:subscriptions:save:fail' => "Il y a eu un problème lors de l'enregistrement des abonnements de notification.",

	'notification:default:salutation' => 'Cher %s,',
	'notification:default:sign-off' => 'Cordialement,

%s',
	'notification:subject' => 'Notification à propos de %s',
	'notification:body' => 'Voir la nouvelle activité sur %s',
	
	'notifications:delayed_email:subject:daily' => "Notification quotidiennes",
	'notifications:delayed_email:subject:weekly' => "Notification mensuelles",
	
	'notifications:subscriptions:no_results' => 'Il n\'y a aucun enregistrement d\'abonnement pour le moment',

	'notifications:mute:title' => "Interrompre les notifications",
	'notifications:mute:description' => "Si vous ne souhaitez plus recevoir de notification comme celle que vous avez reçue, configurez une ou plusieurs des motifs suivants pour bloquer toutes les notifications :",
	'notifications:mute:error:content' => "Aucun paramètre de notification n'a pu être déterminé",
	'notifications:mute:entity' => "à propos de '%s'",
	'notifications:mute:container' => "de '%s'",
	'notifications:mute:owner' => "par '%s'",
	'notifications:mute:actor' => "démarré par '%s'",
	'notifications:mute:group' => "écrit dans le groupe '%s'",
	'notifications:mute:user' => "écrit par l'utilisateur '%s'",
	
	'notifications:mute:save:success' => "Vos paramètres de notification ont bien été enregistrés.",

/**
 * Search
 */

	'search' => "Chercher",
	'searchtitle' => "Rechercher : %s",
	'users:searchtitle' => "Recherche de membres : %s",
	'groups:searchtitle' => "Recherche de groupes : %s",
	'advancedsearchtitle' => "%s résultat(s) pour %s",
	'notfound' => "Aucun résultat trouvé.",

	'viewtype:change' => "Changer le type de liste",
	'viewtype:list' => "Liste",
	'viewtype:gallery' => "Galerie",

	'tag:search:startblurb' => "Éléments avec le(s) tag(s) '%s' :",

	'user:search:startblurb' => "Membres correspondant à \"%s\" :",
	'user:search:finishblurb' => "Pour en voir plus, cliquez ici.",

	'group:search:startblurb' => "Groupes correspondant à \"%s\" :",
	'group:search:finishblurb' => "Pour en voir plus, cliquez ici.",
	'search:go' => 'Rechercher',
	'userpicker:only_friends' => 'Seulement les contacts',

/**
 * Account
 */

	'account' => "Compte",
	'settings' => "Paramètres",
	'tools' => "Outils",
	'settings:edit' => 'Modifier les paramètres',

	'register' => "S'enregistrer",
	'registerok' => "Votre compte a bien été créé sur %s.",
	'registerbad' => "La création de votre compte a échoué pour une raison inconnue.",
	'registerdisabled' => "La création de compte a été désactivée par l'administrateur du site.",
	'register:fields' => 'Tous les champs sont requis',

	'registration:noname' => 'Le nom affiché est requis.',
	'registration:notemail' => 'L\'adresse email que vous avez indiquée ne semble pas valide.',
	'registration:userexists' => 'Cet identifiant est déjà pris',
	'registration:usernametooshort' => 'L\'identifiant doit comporter au moins %u caractères.',
	'registration:usernametoolong' => 'Votre identifiant est trop long. Il peut comporter au maximum %u caractères.',
	'registration:passwordtooshort' => 'Le mot de passe doit comporter un minimum de %u caractères.',
	'registration:dupeemail' => 'Cette adresse email est déjà utilisée.',
	'registration:invalidchars' => 'Désolé, votre identifiant contient le caractère %s qui est invalide. Les caractères suivants sont invalides : %s',
	'registration:emailnotvalid' => 'Désolé, l\'adresse email que vous avez entrée est invalide sur ce site.',
	'registration:passwordnotvalid' => 'Désolé, le mot de passe que vous avez entré est invalide sur ce site.',
	'registration:usernamenotvalid' => 'Désolé, l\'identfiant que vous avez indiqué est invalide sur ce site.',

	'adduser' => "Ajouter un utilisateur",
	'adduser:ok' => "Vous avez bien ajouté un nouvel utilisateur.",
	'adduser:bad' => "Le nouvel utilisateur n'a pas pu être créé.",

	'user:set:name' => "Nom",
	'user:name:label' => "Nom",
	'user:name:success' => "Votre nom a été changé avec succès.",
	'user:name:fail' => "Impossible de changer votre nom. Assurez-vous que votre nom n'est pas trop long et essayez à nouveau.",
	'user:username:success' => "Le nom d'utilisateur a bien été modifié.",
	'user:username:fail' => "Le nom d'utlisateur n'a pas pu être modifié.",

	'user:set:password' => "Mot de passe",
	'user:current_password:label' => 'Mot de passe actuel',
	'user:password:label' => "Nouveau mot de passe",
	'user:password2:label' => "Nouveau mot de passe (confirmation)",
	'user:password:success' => "Le mot de passe a bien été modifié",
	'user:password:fail' => "Impossible de modifier votre mot de passe.",
	'user:password:fail:notsame' => "Les deux mots de passe ne correspondent pas !",
	'user:password:fail:tooshort' => "Le mot de passe est trop court !",
	'user:password:fail:incorrect_current_password' => 'Le mot de passe actuel que vous avez indiqué est incorrect.',
	'user:changepassword:unknown_user' => 'Utilisateur inconnu.',
	'user:changepassword:change_password_confirm' => 'Cela modifiera votre mot de passe.',

	'user:set:language' => "Langue",
	'user:language:label' => "Votre langue",
	'user:language:success' => "Votre préférence de langue a bien été enregistré.",
	'user:language:fail' => "Votre préférence de langue n'a pas pu être enregistré.",

	'user:username:notfound' => 'Identifiant %s non trouvé.',
	'user:username:help' => 'Soyez bien conscient que le changement de nom d\'utilisateur va modifier tous les liens dynamiques relatifs à ce compte utilisateur',

	'user:password:lost' => 'Mot de passe perdu',
	'user:password:hash_missing' => 'Nous regrettons de devoir vous demander de réinitialiser votre mot de passe.  La sécurité des mots de passe a été améliorée sur le site, mais il n\'a pas été possible de conserver les mots de passe lors de cette opération.',
	'user:password:changereq:success' => 'Vous avez demandé un nouveau mot de passe, un email de confirmation vous a été envoyé',
	'user:password:changereq:fail' => 'Impossible de demander un nouveau mot de passe.',

	'user:password:text' => 'Pour générer un nouveau mot de passe, entrez votre identifiant ou votre e-mail ci-dessous, puis cliquez sur le bouton.',

	'user:persistent' => 'Se souvenir de moi',

	'walled_garden:home' => 'Accueil',

/**
 * Password requirements
 */
	'password:requirements:min_length' => "Le mot de passe doit comporter au moins %s caractères.",
	'password:requirements:lower' => "Le mot de passe doit comporter au moins %s caractères minuscules.",
	'password:requirements:no_lower' => "Le mot de passe ne devrait contenir aucun caractère minuscule.",
	'password:requirements:upper' => "Le mot de passe doit comporter au moins %s caractères majuscules.",
	'password:requirements:no_upper' => "Le mot de passe ne devrait contenir aucun caractère majuscule.",
	'password:requirements:number' => "Le mot de passe doit comporter au moins %s chiffres.",
	'password:requirements:no_number' => "Le mot de passe ne devrait contenir aucun chiffre.",
	'password:requirements:special' => "Le mot de passe doit comporter au moins %s caractères spéciaux.",
	'password:requirements:no_special' => "Le mot de passe ne devrait contenir aucun caractère spécial.",
	
/**
 * Administration
 */
	'menu:page:header:administer' => 'Administrer',
	'menu:page:header:configure' => 'Configurer',
	'menu:page:header:develop' => 'Développer',
	'menu:page:header:information' => 'Information',
	'menu:page:header:default' => 'Autre',

	'admin:view_site' => 'Voir le site',
	'admin:loggedin' => 'Connecté en tant que %s',
	'admin:menu' => 'Menu',

	'admin:configuration:success' => "Vos paramètres ont bien été été enregistrés.",
	'admin:configuration:fail' => "Vos paramètres n'ont pas pu être enregistrés.",
	'admin:configuration:dataroot:relative_path' => 'Impossible de définir "%s" comme racine pour le dossier de données car ce n\'est pas un chemin absolu.',
	'admin:configuration:default_limit' => 'Le nombre d\'éléments par page doit être d\'au moins 1.',

	'admin:unknown_section' => 'Partie Admin invalide.',

	'admin' => "Administration",
	'admin:header:release' => "Version de Elgg : %s",
	'admin:description' => "Le panneau d'administration vous permet de contrôler tous les aspects du système, de la gestion des utilisateurs au comportement des outils installés. Choisissez une option ci-dessous pour commencer.",

	'admin:performance' => 'Performance',
	'admin:performance:label:generic' => 'Générique',
	'admin:performance:generic:description' => 'Voici une liste de suggestions / valeurs qui pourraient aider aux réglages de performance de votre site',
	'admin:performance:simplecache' => 'Cache simple (Simplecache)',
	'admin:performance:simplecache:settings:warning' => "Il est recommandé de configurer le réglage de simplecache dans le fichier settings.php.
Configurer simplecache dans le fichier settings.php améliore les performances du cache.
Cela permet à Elgg d'éviter la connexion à la base de données lors de l'envoi de fichiers JavaScript et CSS mis en cache",
	'admin:performance:systemcache' => 'Systemcache',
	'admin:performance:apache:mod_cache' => 'Apache mod_cache',
	'admin:performance:apache:mod_cache:warning' => 'Le module mod_cache fournit un schéma de cache compatible HTTP. Ceci signifie que les fichiers seront mis en cache en fonction d\'une instruction qui spécifie combien de temps une page peut être considérée comme "fraîche".',
	'admin:performance:php:open_basedir' => 'PHP open_basedir',
	'admin:performance:php:open_basedir:not_configured' => 'Aucune limite n\'a été définie',
	'admin:performance:php:open_basedir:warning' => 'Un faible nombre de limitations de open_basedir sont effectives, ceci peut avoir un effet sur la performance.',
	'admin:performance:php:open_basedir:error' => 'Un grand nombre de limitations de open_basedir sont effectives, ceci va probablement avoir un effet sur la performance.',
	'admin:performance:php:open_basedir:generic' => 'Avec open_basedir chaque accès à un fichier sera vérifié auprès de la liste des limitations. Comme Elgg a un grand nombre d\'accès aux fichiers cela va avoir un effet négatif sur les performances. D\'autre part l\'opcache de PHP ne peut plus mettre en cache les chemins de fichiers en mémoire et doit résoudre cela lors de chaque accès.',
	
	'admin:statistics' => 'Statistiques',
	'admin:server' => 'Serveur',
	'admin:cron' => 'Cron',
	'admin:cron:record' => 'Dernières tâches planifiées',
	'admin:cron:period' => 'Intervalle de la table de planification (cron)',
	'admin:cron:friendly' => 'Dernière exécution',
	'admin:cron:date' => 'Date et heure',
	'admin:cron:msg' => 'Message',
	'admin:cron:started' => 'Tâches Cron pour "%s" démarrées à %s',
	'admin:cron:started:actual' => 'Démarrage du traitement de l\'intervale cron "%s" à %s',
	'admin:cron:complete' => 'Tâches Cron pour "%s" terminées à %s',

	'admin:appearance' => 'Apparence',
	'admin:administer_utilities' => 'Utilitaires',
	'admin:develop_utilities' => 'Utilitaires',
	'admin:configure_utilities' => 'Utilitaires',
	'admin:configure_utilities:robots' => 'Robots.txt',

	'admin:users' => "Utilisateurs",
	'admin:users:online' => 'Actuellement en ligne',
	'admin:users:newest' => 'Nouveaux',
	'admin:users:admins' => 'Administrateurs',
	'admin:users:searchuser' => 'Recherchez des utilisateurs pour les rendre administrateurs',
	'admin:users:existingadmins' => 'Liste des administrateurs',
	'admin:users:add' => 'Créer un utilisateur',
	'admin:users:description' => "Ce panneau d'administration vous permet de contrôler les paramètres des utilisateurs de votre site. Choisissez une option ci-dessous pour commencer.",
	'admin:users:adduser:label' => "Cliquez ici pour ajouter un nouvel utilisateur ...",
	'admin:users:opt:linktext' => "Configurer les utilisateurs...",
	'admin:users:opt:description' => "Configurer les utilisateurs et les informations des comptes.",
	'admin:users:find' => 'Trouver',
	'admin:users:unvalidated' => 'Non validés',
	'admin:users:unvalidated:no_results' => 'Aucun utilisateur non validé.',
	'admin:users:unvalidated:registered' => 'Enregistré : %s',
	'admin:users:unvalidated:change_email' => 'Modifier l\'adresse email',
	'admin:users:unvalidated:change_email:user' => 'Modifier l\'adresse email pour : %s',
	
	'admin:configure_utilities:maintenance' => 'Mode maintenance',
	'admin:upgrades' => 'Mises à niveau',
	'admin:upgrades:finished' => 'Terminé',
	'admin:upgrades:db' => 'Mises à niveau de la base de données',
	'admin:upgrades:db:name' => 'Nom de la mise à niveau',
	'admin:upgrades:db:start_time' => 'Heure de démarrage',
	'admin:upgrades:db:end_time' => 'Heure de fin',
	'admin:upgrades:db:duration' => 'Durée',
	'admin:upgrades:menu:pending' => 'Mises à niveau en attente',
	'admin:upgrades:menu:completed' => 'Mises à niveau terminées',
	'admin:upgrades:menu:db' => 'Mises à niveau de la base de données',
	'admin:upgrades:menu:run_single' => 'Exécuter cette mise à niveau',
	'admin:upgrades:run' => 'Lancer les mises à niveau maintenant',
	'admin:upgrades:error:invalid_upgrade' => 'L\'entité %s n\'existe pas ou n\'est pas une instance valide de ElggUpgrade',
	'admin:upgrades:error:invalid_batch' => 'L\'exécution du traitement par lot (batch) pour la mise à niveau %s (%s) n\'a pas pu être instancié',
	'admin:upgrades:completed' => 'Mise à niveau "%s" terminée à %s',
	'admin:upgrades:completed:errors' => 'Mise à niveau "%s" terminée à %s mais a rencontré %s erreurs',
	'admin:upgrades:failed' => 'La mise à niveau "%s" a échoué',
	'admin:action:upgrade:reset:success' => 'La mise à niveau "%s" a été réinitialisée',

	'admin:settings' => 'Configuration',
	'admin:settings:basic' => 'Configuration de base',
	'admin:settings:i18n' => 'Internationalisation',
	'admin:settings:advanced' => 'Configuration avancée',
	'admin:settings:users' => 'Membres',
	'admin:site_settings' => "Paramètres du site",
	'admin:site:description' => "Ce menu vous permet de définir les paramètres globaux de votre site. Choisissez une option ci-dessous pour commencer.",
	'admin:site:opt:linktext' => "Configurer le site...",
	'admin:settings:in_settings_file' => 'Ce paramètre est configuré dans settings.php',

	'site_secret:current_strength' => 'Complexité de la clé',
	'site_secret:strength:weak' => "Faible",
	'site_secret:strength_msg:weak' => "Nous vous conseillons fortement de régénérer la clé secrète du site.",
	'site_secret:strength:moderate' => "Moyenne",
	'site_secret:strength_msg:moderate' => "Nous vous conseillons de régénérer la clé secrète du site pour une meilleure sécurité.",
	'site_secret:strength:strong' => "Forte",
	'site_secret:strength_msg:strong' => "La clé secrète de votre site est suffisamment forte. Nul besoin de la régénérer.",

	'admin:dashboard' => 'Tableau de bord',
	'admin:widget:online_users' => 'Utilisateurs en ligne',
	'admin:widget:online_users:help' => 'Affiche la liste des utilisateurs actuellement sur le site',
	'admin:widget:new_users' => 'Nouveaux utilisateurs',
	'admin:widget:new_users:help' => 'Liste des nouveaux utilisateurs',
	'admin:widget:banned_users' => 'Utilisateurs bannis',
	'admin:widget:banned_users:help' => 'Liste les utilisateurs bannis',
	'admin:widget:content_stats' => 'Statistiques des contenus',
	'admin:widget:content_stats:help' => 'Suivez le contenu créé par les membres',
	'admin:widget:cron_status' => 'Statut du cron',
	'admin:widget:cron_status:help' => 'Affiche le statut des dernières tâches cron terminées',
	'admin:statistics:numentities' => 'Statistiques de contenu',
	'admin:statistics:numentities:type' => 'Type de contenu',
	'admin:statistics:numentities:number' => 'Nombre',
	'admin:statistics:numentities:searchable' => 'Entités recherchables',
	'admin:statistics:numentities:other' => 'Autre entités',

	'admin:widget:admin_welcome' => 'Bienvenue',
	'admin:widget:admin_welcome:help' => "Une courte présentation de la zone d'administration d'Elgg",
	'admin:widget:admin_welcome:intro' =>
'Bienvenue sur Elgg ! Vous êtes actuellement sur le tableau de bord de l\'administration. Il permet de suivre ce qui se passe sur le site.',

	'admin:widget:admin_welcome:registration' => "L'inscription de nouveaux utilisateurs est actuellement désactivée ! Vous pouvez activer cela sur la page %s.",
	'admin:widget:admin_welcome:admin_overview' =>
"La navigation dans la zone d'administration se fait à l'aide du menu de droite. Il est organisé en trois parties :
	<dl>
		<dt>Administrer</dt><dd>Les tâches de tous les jours comme suivre le contenu signalé, vérifier qui est en ligne, et afficher des statistiques.</dd>
		<dt>Configurer</dt><dd>Les tâches occasionnelles comme la définition du nom du site ou l'activation d'un plugin.</dd>
		<dt>Information</dt><dd>Informations à propos de votre site, telles que des statistiques.</dd>
		<dt>Développer</dt><dd>Pour les développeurs qui créent des plugins ou conçoivent des thèmes. (Nécessite le plugin developer).</dd>
	</dl>
",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Pensez à consulter les ressources disponibles via les liens de bas de page, et merci d\'utiliser Elgg !',

	'admin:widget:control_panel' => 'Panneau de contrôle',
	'admin:widget:control_panel:help' => "Fournit un accès aisé aux contrôles habituels",

	'admin:cache:flush' => 'Vider les caches',
	'admin:cache:flushed' => "Les caches du site ont été vidés",
	'admin:cache:invalidate' => 'Invalider les caches',
	'admin:cache:invalidated' => "Les caches du site ont été invalidés",
	'admin:cache:clear' => 'Vider les caches',
	'admin:cache:cleared' => "Les caches du site ont été vidés",
	'admin:cache:purge' => 'Purger les caches',
	'admin:cache:purged' => "Les caches du site ont été purgés",

	'admin:footer:faq' => 'FAQ Administration',
	'admin:footer:manual' => 'Guide de l\'administration',
	'admin:footer:community_forums' => 'Forums de la communauté Elgg',
	'admin:footer:blog' => 'Blog d\'Elgg',

	'admin:plugins:category:all' => 'Tous les plugins',
	'admin:plugins:category:active' => 'Plugins actifs',
	'admin:plugins:category:inactive' => 'Plugins inactifs',
	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Empaquetés',
	'admin:plugins:category:nonbundled' => 'Non-empaquetés',
	'admin:plugins:category:content' => 'Contenu',
	'admin:plugins:category:development' => 'Développement',
	'admin:plugins:category:enhancement' => 'Améliorations',
	'admin:plugins:category:api' => 'Service/API',
	'admin:plugins:category:communication' => 'Communication',
	'admin:plugins:category:security' => 'Sécurité et spam',
	'admin:plugins:category:social' => 'Social',
	'admin:plugins:category:multimedia' => 'Multimédia',
	'admin:plugins:category:theme' => 'Thèmes',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Utilitaires',

	'admin:plugins:markdown:unknown_plugin' => 'Plugin inconnu.',
	'admin:plugins:markdown:unknown_file' => 'Fichier inconnu.',

	'admin:notices:delete_all' => 'Supprimez les %s notices d\'information',
	'admin:notices:could_not_delete' => 'Impossible de supprimer la note d\'information.',
	'item:object:admin_notice' => 'Note d\'administration',
	'collection:object:admin_notice' => 'Informations admin',

	'admin:options' => 'Options Admin',

	'admin:security' => 'Sécurité',
	'admin:security:information' => 'Information',
	'admin:security:information:description' => 'Sur cette page vous pouvez trouver une liste de recommandations de sécurité.',
	'admin:security:information:https' => 'Est-ce que le site est protégé par HTTPS',
	'admin:security:information:https:warning' => "Il est recommandé de protéger votre site en utilisant HTTPS, ceci aide à éviter que les données (par ex. les mots de passe) ne soient épiée via la connexion internet.",
	'admin:security:information:wwwroot' => 'Le répertoire principal du site est inscriptible',
	'admin:security:information:wwwroot:error' => "Il est recommandé d'installer Elgg dans un répertoire qui n'est pas inscriptible par votre serveur web.
Des visiteurs mal intentionnés pourraient placer du code non souhaité dans votre site.",
	'admin:security:information:validate_input' => 'Validation des entrées',
	'admin:security:information:validate_input:error' => "Quelques plugins ont désactivé la validation des saisies sur votre site, ce qui permet aux utilisateurs d'envoyer du contenu potentiellement dangereux (par ex. cross-site-scripting, etc.)",
	'admin:security:information:password_length' => 'Longueur minimale du mot de passe',
	'admin:security:information:password_length:warning' => "Il est recommandé d'avoir une longueur de mot de passe d'au moins 6 caractères.",
	'admin:security:information:username_length' => 'Longueur minimale du nom d’utilisateur',
	'admin:security:information:username_length:warning' => "Il est recommandé d'avoir un identifiant d'au moins 4 caractères.",
	'admin:security:information:php:session_gc' => "Nettoyage des sessions PHP",
	'admin:security:information:php:session_gc:chance' => "Probabilité de nettoyage : %s %%",
	'admin:security:information:php:session_gc:lifetime' => "Durée de vie d'une session %s secondes",
	'admin:security:information:php:session_gc:error' => "Il est recommandé de définir 'session.gc_probability' et 'session.gc_divisor' dans vos paramètres PHP, ceci va nettoyer les sessions expirées de votre base de données et empêcher les utilisateurs d'utiliser d'anciennes sessions.",
	'admin:security:information:htaccess:hardening' => "Sécurisation de l’accès aux fichiers via .htaccess",
	'admin:security:information:htaccess:hardening:help' => "Dans le fichier .htaccess il est possible de bloquer l'accès à certains fichiers pour augmenter la sécurité de votre site. Pöur plus d'informations regardez dans votre fichier .htaccess.",
	
	'admin:security:settings' => 'Paramètres',
	'admin:security:settings:description' => 'Sur cette page vous pouvez configurer quelques fonctionnalités de sécurité. Veuillez lire attentivement les paramètres.',
	'admin:security:settings:label:hardening' => 'Sécurisation',
	'admin:security:settings:label:account' => 'Compte',
	'admin:security:settings:label:notifications' => 'Notifications',
	'admin:security:settings:label:site_secret' => 'Secret du site',
	
	'admin:security:settings:notify_admins' => 'Notifier tous les administrateurs du site quand un admin est ajouté ou retiré',
	'admin:security:settings:notify_admins:help' => 'Ceci enverra une notification à tous les administrateurs du site lorsque l\'un des admins ajoute/supprime un administrateur du site.',
	
	'admin:security:settings:notify_user_admin' => 'Notifie l\'utilisateur lorsqu\'un admin est ajouté ou retiré',
	'admin:security:settings:notify_user_admin:help' => 'Ceci enverra une notification à l\'utilisateur que le rôle d\'administrateur à été ajouté à/retiré de son compte.',
	
	'admin:security:settings:notify_user_ban' => 'Notifie l\'utilisateur lorsque son compte est banni/réintégré',
	'admin:security:settings:notify_user_ban:help' => 'Ceci enverra une notification à l\'utilisateur indiquant que son compte a été banni/réintégré.',
	
	'admin:security:settings:notify_user_password' => 'Notifie les utilisateurs lorsqu\'ils modifient leur mot de passe',
	'admin:security:settings:notify_user_password:help' => 'Ceci enverra une notification aux utilisateurs quand ils modifient leur mot de passe.',
	
	'admin:security:settings:protect_upgrade' => 'Protéger upgrade.php',
	'admin:security:settings:protect_upgrade:help' => 'Ceci va protéger upgrade.php de sorte qu\'il soit nécessaire de disposer d\'un jeton valide ou d\'être un administrateur du site.',
	'admin:security:settings:protect_upgrade:token' => 'Afin de pouvoir utiliser upgrade.php hors authentification ou en tant que simple membre, il est nécessaire d\'utiliser l\'URL suivante :',
	
	'admin:security:settings:protect_cron' => 'Protéger les URLs du cron /cron',
	'admin:security:settings:protect_cron:help' => 'Ceci va protéger les URLs /cron avec un jeton, le cron ne s\'exécutera que si un jeton valide est fourni.',
	'admin:security:settings:protect_cron:token' => 'Afin de pouvoir utiliser les URLs /cron les jetons suivants doivent être utilisés. Veuillez noter que chaque intervale dispose de son propre jeton.',
	'admin:security:settings:protect_cron:toggle' => 'Afficher/cacher les URLs du cron',
	
	'admin:security:settings:disable_password_autocomplete' => 'Désactiver l\'autocomplétion sur les champs mot de passe',
	'admin:security:settings:disable_password_autocomplete:help' => 'Les données saisies dans ces champs seront mises en cache par le navigateur. Un attaquant qui a accès au navigateur de la victime pourrait subtiliser ces informations. Ceci est particulièrement important si l\'application est utilisée habituellement depuis des ordinateurs partagés tels que des cybercafés ou des terminaux d\'aéroports. Si vous désactivez ceci, les outils de gestion des mots de passe ne pourront plus renseigner automatiquement ces champs. Le support pour l\'attribut autocomplete peut dépendre des navigateurs.',
	
	'admin:security:settings:email_require_password' => 'Demander le mot de passe pour changer l\'adresse email',
	'admin:security:settings:email_require_password:help' => 'Quand un utilisateur souhaite changer son adresse email, cette option impose qu\'il fournisse son mot de passe actuel.',
	
	'admin:security:settings:email_require_confirmation' => 'Demander une confirmation lors de la modification de l\'adresse email.',
	'admin:security:settings:email_require_confirmation:help' => 'La nouvelle adresse email doit être confirmée avant que la modification soit effective. Après une modification réussie une notification est envoyée à l\'ancienne adresse email.',

	'admin:security:settings:session_bound_entity_icons' => 'Icônes d\'entités liées aux sessions',
	'admin:security:settings:session_bound_entity_icons:help' => 'Les icônes d’entité peuvent être liées par défaut à une session. Cela signifie que les URL générées contiennent également des informations sur la session en cours. 
Le fait d’avoir des icônes liées à la session rend les URL des icônes non partageables entre les sessions. L’effet secondaire est que la mise en cache de ces URL ne bénéficiera qu\'à la session active.',
	
	'admin:security:settings:site_secret:intro' => 'Elgg utilise une clef pour créer des jetons de sécurité pour diverses finalités.',
	'admin:security:settings:site_secret:regenerate' => "Régénérer la clef secrète du site",
	'admin:security:settings:site_secret:regenerate:help' => "Note : la régénération de la clef secrète du site peut gêner quelques utilisateurs en invalidant les jetons utilisés pour les cookies \"se souvenir de moi\", les emails de validation, les codes d'invitation, etc.",
	
	'admin:security:settings:minusername' => "Longueur minimale du nom d’utilisateur",
	'admin:security:settings:minusername:help' => "Nombre minimal de caractères requis pour un nom d'utilisateur",
	
	'admin:security:settings:min_password_length' => "Longueur minimale du mot de passe",
	'admin:security:settings:min_password_length:help' => "Nombre minimal de caractères requis pour un mot de passe",
	
	'admin:security:settings:min_password_lower' => "Nombre minimal de caractères minuscules requis pour un mot de passe",
	'admin:security:settings:min_password_lower:help' => "Configurer le nombre minimal de caractères minuscules (a-z) qui devraient être présents dans un mot de passe. 0 pour aucun, vide pour aucune exigence.",
	
	'admin:security:settings:min_password_upper' => "Nombre minimal de caractères majuscules requis pour un mot de passe",
	'admin:security:settings:min_password_upper:help' => "Configurer le nombre minimal de caractères majuscules (A-Z) qui devraient être présents dans un mot de passe. 0 pour aucun, vide pour aucune exigence.",
	
	'admin:security:settings:min_password_number' => "Nombre minimal de chiffres requis pour un mot de passe",
	'admin:security:settings:min_password_number:help' => "Configurer le nombre minimal de chiffres (0-9) qui devraient être présents dans un mot de passe. 0 pour aucun, vide pour aucune exigence.",
	
	'admin:security:settings:min_password_special' => "Nombre minimal de caractères spéciaux requis pour un mot de passe",
	'admin:security:settings:min_password_special:help' => "Configurer le nombre minimal de caractères spéciaux (!@$%^&*()<>,.?/[]{}-=_+) qui devraient être présents dans un mot de passe. 0 pour aucun, vide pour aucune exigence.",
	
	'admin:site:secret:regenerated' => "Votre clef secrète du site a bien été régénérée",
	'admin:site:secret:prevented' => "La régénération de la clef secrète du site a été bloquée",
	
	'admin:notification:make_admin:admin:subject' => 'Un nouvel administrateur du site a été ajouté pour %s',
	'admin:notification:make_admin:admin:body' => '%s a rendu %s administrateur du site %s.

Pour voir le profil du nouvel administrateur :
%s',
	
	'admin:notification:make_admin:user:subject' => 'Vous avez été ajouté comme administrateur du site %s',
	'admin:notification:make_admin:user:body' => '%s vous a rendu administrateur du site %s.

Pour vous rendre sur le site :
%s',
	'admin:notification:remove_admin:admin:subject' => 'Un administrator du site a été retiré de %s',
	'admin:notification:remove_admin:admin:body' => '%s a retiré %s des administrateurs de %s.

Pour voir le profil de l\'ancien administrateur :
%s',
	
	'admin:notification:remove_admin:user:subject' => 'Vous ne faites plus partie des administrateurs de %s',
	'admin:notification:remove_admin:user:body' => '%s vous a retiré les droits d\'administrateur de %s.

Pour vous rendre sur le site :
%s',
	'user:notification:ban:subject' => 'Votre compte sur %s a été banni',
	'user:notification:ban:body' => 'Votre compte sur %s a été banni.

Pour vous rendre sur le site :
%s',
	
	'user:notification:unban:subject' => 'Votre compte sur %s n\'est plus banni',
	'user:notification:unban:body' => 'Votre compte sur %s n\'est plus banni. Vous pouvez à nouveau vous connecter sur le site.

Pour vous rendre sur le site :
%s',
	
	'user:notification:password_change:subject' => 'Votre mot de passe a été modifié !',
	'user:notification:password_change:body' => "Votre mot de passe '%s' a été modifié ! Si vous êtes à l'origine de cette modification alors tout va bien, veuillez ne pas tenir compte de ce message.

Si vous n'êtes pas à l'origine de cette modification, veuillez réinitialiser votre mot de passe ici :
%s

Ou contactez un administrateur du site :
%s",
	
	'admin:notification:unvalidated_users:subject' => "Utilisateurs en attente d'approbation sur %s",
	'admin:notification:unvalidated_users:body' => "%d utilisateurs de '%s' attendent l'approbation par un administrateur.

Voyez la liste complète des utilisateurs ici :
%s",

/**
 * Plugins
 */

	'plugins:disabled' => 'Les Plugins ne sont pas chargés car un fichier nommé "disabled" est présent dans le répertoire mod.',
	'plugins:settings:save:ok' => "Les paramètres du plugin %s ont bien été enregistrés.",
	'plugins:settings:save:fail' => "Il y a eu un problème lors de l'enregistrement des paramètres du plugin %s.",
	'plugins:settings:remove:ok' => "Tous les paramètres du plugin %s ont été supprimés",
	'plugins:settings:remove:fail' => "Une erreur est survenue lors de la suppression des paramètres du plugin %s",
	'plugins:usersettings:save:ok' => "Les paramètres utilisateur du plugin %s ont bien été enregistrés.",
	'plugins:usersettings:save:fail' => "Il y a eu un problème lors de l'enregistrement des paramètres utilisateur du plugin %s.",
	
	'item:object:plugin' => 'Plugins',
	'collection:object:plugin' => 'Plugins',
	
	'plugins:settings:remove:menu:text' => "Supprimer tous les paramètres",
	'plugins:settings:remove:menu:confirm' => "Confirmez-vous vouloir supprimer tous les paramètres, y compris les paramètres utilisateur pour ce plugin ?",

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Tout activer',
	'admin:plugins:deactivate_all' => 'Tout désactiver',
	'admin:plugins:activate' => 'Activer',
	'admin:plugins:deactivate' => 'Désactiver',
	'admin:plugins:description' => "Ce menu vous permet de contrôler et de configurer les outils installés sur votre site.",
	'admin:plugins:opt:linktext' => "Configurer les outils...",
	'admin:plugins:opt:description' => "Configurer les outils installés sur le site.",
	'admin:plugins:label:id' => "ID",
	'admin:plugins:label:name' => "Nom",
	'admin:plugins:label:authors' => "Auteurs",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Catégories',
	'admin:plugins:label:licence' => "License",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:info' => "Informations",
	'admin:plugins:label:files' => "Fichiers",
	'admin:plugins:label:resources' => "Ressources",
	'admin:plugins:label:screenshots' => "Captures d'écran",
	'admin:plugins:label:repository' => "Code",
	'admin:plugins:label:bugtracker' => "Signaler un problème",
	'admin:plugins:label:donate' => "Faire un don",
	'admin:plugins:label:moreinfo' => 'plus d\'informations',
	'admin:plugins:label:version' => 'Version',
	'admin:plugins:label:location' => 'Adresse',
	'admin:plugins:label:priority' => 'Priorité',
	'admin:plugins:label:dependencies' => 'Dépendances',
	'admin:plugins:label:missing_dependency' => 'Dépendance manquante [%s].',

	'admin:plugins:warning:unmet_dependencies' => 'Ce plugin a des dépendances non satisfaites et ne peut pas être activé. Vérifiez les dépendances dans la partie "Plus d\'informations".',
	'admin:plugins:warning:invalid' => '%s n\'est pas un plugin d\'Elgg valide. Vérifiez <a href="http://docs.elgg.org/Invalid_Plugin">la documentation d\'Elgg</a> les conseils de dépannage.',
	'admin:plugins:warning:invalid:check_docs' => 'Vérifiez <a href="http://learn.elgg.org/fr/stable/appendix/faqs.html">la documentation d\'Elgg</a> pour des astuces de débogage. Vous pouvez également consulter <a href="http://learn.elgg.org/en/stable/appendix/faqs.html">version anglophone</a>, qui peut être plus complète / récente.',
	'admin:plugins:cannot_activate' => 'Activation impossible',
	'admin:plugins:cannot_deactivate' => 'impossible de désactiver',
	'admin:plugins:already:active' => 'Le (ou les) plugin sélectionné est déjà activé.',
	'admin:plugins:already:inactive' => 'Le (ou les) plugin sélectionné est déjà désactivé.',

	'admin:plugins:set_priority:yes' => "%s a été réordonné.",
	'admin:plugins:set_priority:no' => "Impossible de réordonner %s.",
	'admin:plugins:deactivate:yes' => "Désactiver %s.",
	'admin:plugins:deactivate:no' => "Impossible de désactiver %s.",
	'admin:plugins:deactivate:no_with_msg' => "Impossible de désactiver %s. Erreur : %s",
	'admin:plugins:activate:yes' => "%s a été activé.",
	'admin:plugins:activate:no' => "Impossible d'activer %s.",
	'admin:plugins:activate:no_with_msg' => "Impossible d'activer %s. Erreur : %s",
	'admin:plugins:categories:all' => 'Toutes les catégories',
	'admin:plugins:plugin_website' => 'Site du plugin',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Version %s',
	'admin:plugin_settings' => 'Paramètres du plugin',
	'admin:plugins:warning:unmet_dependencies_active' => 'Ce plugin est actif, mais a des dépendances non satisfaites. Cela peut poser des problèmes. Voir "plus d\'informations" ci-dessous pour plus de détails.',

	'admin:statistics:description' => "Ceci est un aperçu des statistiques du site. Si vous avez besoin de statistiques plus détaillées, une version professionnelle d'administration est disponible.",
	'admin:statistics:opt:description' => "Afficher les statistiques sur les utilisateurs et les objets du site.",
	'admin:statistics:opt:linktext' => "Voir les statistiques...",
	'admin:statistics:label:user' => "Statistiques des utilisateurs",
	'admin:statistics:label:numentities' => "Entités sur le site",
	'admin:statistics:label:numusers' => "Nombre d'utilisateurs",
	'admin:statistics:label:numonline' => "Nombre d'utilisateurs en ligne",
	'admin:statistics:label:onlineusers' => "Utilisateurs en ligne en ce moment",
	'admin:statistics:label:admins'=>"Administrateurs",
	'admin:statistics:label:version' => "Version d'Elgg",
	'admin:statistics:label:version:release' => "Version majeure (release)",
	'admin:statistics:label:version:version' => "Version",
	'admin:statistics:label:version:code' => "Version du code",

	'admin:server:label:elgg' => 'Elgg',
	'admin:server:label:requirements' => 'Pré-requis',
	'admin:server:label:php' => 'PHP',
	'admin:server:label:phpinfo' => 'Montrer PHPInfo',
	'admin:server:label:web_server' => 'Serveur web',
	'admin:server:label:server' => 'Serveur',
	'admin:server:label:log_location' => 'Emplacement du journal',
	'admin:server:label:php_version' => 'Version de PHP',
	'admin:server:label:php_version:required' => 'Elgg requiert au moins la version PHP 7.1',
	'admin:server:label:php_ini' => 'Emplacement du fichier PHP .ini',
	'admin:server:label:php_log' => 'Journal PHP',
	'admin:server:label:mem_avail' => 'Mémoire disponible',
	'admin:server:label:mem_used' => 'Mémoire utilisée',
	'admin:server:error_log' => "Journal d'erreur du serveur web",
	'admin:server:label:post_max_size' => 'Taille maximum d\'un envoi POST',
	'admin:server:label:upload_max_filesize' => 'Taille maximale d\'envoi',
	'admin:server:warning:post_max_too_small' => '(Remarque : la valeur de post_max_size doit être supérieure à cette valeur pour supporter des envois de cette taille)',
	'admin:server:label:memcache' => 'Memcache',
	'admin:server:memcache:inactive' => '
		Memcache n\'est pas installé sur ce serveur ou n\'a pas encore été configuré dans la configuration d\'Elgg.
		Pour des performances améliorées, il est recommandé que vous activiez et configuriez memcache (ou redis).
',

	'admin:server:label:redis' => 'Redis',
	'admin:server:redis:inactive' => '
		Redis n\'est pas installé sur ce serveur ou n\'a pas encore été configuré dans la configuration d\'Elgg.
		Pour des performances améliorées, il est recommandé que vous activiez et configuriez redis (ou memcache).
',

	'admin:server:label:opcache' => 'OPcache',
	'admin:server:opcache:inactive' => '
		OPcache n\'est pas installé sur ce serveur ou n\'a pas encore été activé.
		Pour des performances améliorées, il est recommandé que vous activiez et configuriez OPcache.
',
	
	'admin:server:requirements:php_extension' => "Extension PHP : %s",
	'admin:server:requirements:php_extension:required' => "Cette extension PHP est requise pour un fonctionnement correct de Elgg",
	'admin:server:requirements:php_extension:recommended' => "Cette extension PHP est recommandée pour un fonctionnement optimal de Elgg",
	'admin:server:requirements:rewrite' => "règles de réécriture .htaccess",
	'admin:server:requirements:rewrite:fail' => "Vérifiez  les règles de réécriture de votre fichier .htaccess",
	
	'admin:server:requirements:database:server' => "Serveur de base de données",
	'admin:server:requirements:database:server:required' => "Elgg requiert MySQL v5.5.3 ou plus pour sa base de données",
	'admin:server:requirements:database:client' => "Client de la base de données",
	'admin:server:requirements:database:client:required' => "Elgg a besoin de pdo_mysql pour se connecter au serveur de base de données",
	
	'admin:user:label:search' => "Trouver des utilisateurs :",
	'admin:user:label:searchbutton' => "Chercher",

	'admin:user:ban:no' => "Cet utilisateur ne peut pas être banni",
	'admin:user:ban:yes' => "Utilisateur banni.",
	'admin:user:self:ban:no' => "Vous ne pouvez pas vous bannir vous-même",
	'admin:user:unban:no' => "Cet utilisateur ne peut pas être réintégré",
	'admin:user:unban:yes' => "Utilisateur réintégré.",
	'admin:user:delete:no' => "Cet utilisateur ne peut pas être supprimé",
	'admin:user:delete:yes' => "L'utilisateur %s a été supprimé",
	'admin:user:self:delete:no' => "Vous ne pouvez pas supprimer votre propre compte",

	'admin:user:resetpassword:yes' => "Mot de passe réinitialisé, l'utilisateur a été notifié par e-mail.",
	'admin:user:resetpassword:no' => "Le mot de passe n'a pas pu être réinitialisé.",

	'admin:user:makeadmin:yes' => "L'utilisateur est maintenant un administrateur.",
	'admin:user:makeadmin:no' => "Impossible de faire de cet utilisateur un administrateur.",

	'admin:user:removeadmin:yes' => "L'utilisateur n'est plus administrateur.",
	'admin:user:removeadmin:no' => "Impossible de supprimer les droits d'administrateur de cet utilisateur.",
	'admin:user:self:removeadmin:no' => "Vous ne pouvez pas supprimer vos propres droits d'administrateur.",

	'admin:configure_utilities:menu_items' => 'Éléments du menu',
	'admin:menu_items:configure' => 'Configurer les éléments du menu principal',
	'admin:menu_items:description' => 'Sélectionnez l\'ordre des éléments du menu du site. Les éléments non configurés seront ajoutés en fin de liste.',
	'admin:menu_items:hide_toolbar_entries' => 'Supprimer les liens dans le menu des outils ?',
	'admin:menu_items:saved' => 'Les éléments de menu ont bien été enregistrés.',
	'admin:add_menu_item' => 'Ajouter un élément de menu personnalisé',
	'admin:add_menu_item:description' => 'Indiquez le nom à afficher et l\'URL afin d\'ajouter des éléments personnalisés à votre menu de navigation.',

	'admin:configure_utilities:default_widgets' => 'Widgets par défaut',
	'admin:default_widgets:unknown_type' => 'Type de widget Inconnu',
	'admin:default_widgets:instructions' => 'Ajoutez, supprimez, positionnez et configurez les widgets par défaut pour la page de widgets sélectionnée.
Ces changements ne concerneront que les nouveaux utilisateurs du site. ',

	'admin:robots.txt:instructions' => "Éditez ci-dessous le fichier robots.txt du site",
	'admin:robots.txt:plugins' => "Les plugins ajoutent les lignes suivantes au fichier robots.txt ",
	'admin:robots.txt:subdir' => "L'outil robots.txt ne fonctionnera peut-être pas car Elgg est installé dans un sous-répertoire",
	'admin:robots.txt:physical' => "La configuration de robots.txt ne fonctionnera pas car un fichier robots.txt est physiquement présent",

	'admin:maintenance_mode:default_message' => 'Le site est temporairement fermé pour cause de maintenance',
	'admin:maintenance_mode:instructions' => 'Le mode maintenance devrait être utilisé pour les mises à niveau et autres changements majeurs du site.
Quand il est activé, seuls les administrateurs peuvent s\'identifier et naviguer sur le site. ',
	'admin:maintenance_mode:mode_label' => 'Mode maintenance',
	'admin:maintenance_mode:message_label' => 'Message affiché aux utilisateurs lorsque le mode maintenance est activé',
	'admin:maintenance_mode:saved' => 'Les paramètres du mode maintenance ont bien été enregistrés.',
	'admin:maintenance_mode:indicator_menu_item' => 'Le site est en maintenance. ',
	'admin:login' => 'Connexion Admin',

/**
 * User settings
 */

	'usersettings:description' => "Le panneau de configuration de votre compte vous permet de contrôler tous vos paramètres personnels, de la gestion de votre compte aux fonctionnement des outils du site. Choisissez une option ci-dessous pour commencer.",

	'usersettings:statistics' => "Vos statistiques",
	'usersettings:statistics:opt:description' => "Visualiser les statistiques des utilisateurs et des objets sur le site.",
	'usersettings:statistics:opt:linktext' => "Statistiques du compte.",

	'usersettings:statistics:login_history' => "Historique de connexion",
	'usersettings:statistics:login_history:date' => "Date",
	'usersettings:statistics:login_history:ip' => "Adresse IP",

	'usersettings:user' => "Paramètres de %s",
	'usersettings:user:opt:description' => "Ceci vous permet de contrôler les paramètres de votre compte.",
	'usersettings:user:opt:linktext' => "Modifier vos paramètres",

	'usersettings:plugins' => "Outils",
	'usersettings:plugins:opt:description' => "Configurer les paramètres de vos outils (s'il y en a).",
	'usersettings:plugins:opt:linktext' => "Configurez vos outils",

	'usersettings:plugins:description' => "Ce panneau vous permet de vérifier et de configurer les paramètres personnels des outils installés par l'administrateur.",
	'usersettings:statistics:label:numentities' => "Vos contenus",

	'usersettings:statistics:yourdetails' => "Vos informations",
	'usersettings:statistics:label:name' => "Votre nom",
	'usersettings:statistics:label:email' => "E-mail",
	'usersettings:statistics:label:membersince' => "Membre depuis",
	'usersettings:statistics:label:lastlogin' => "Dernière connexion",
	
	'usersettings:delayed_email' => "Paramètres d'email différé",
	'usersettings:delayed_email:interval' => "Configurez à quel intervalle les emails différés doivent être envoyés",
	'usersettings:delayed_email:interval:help' => "Tous les emails de notification différés seront enregistrés et livrés dans un seul email combiné à l'intervalle configuré",

/**
 * Activity river
 */

	'river:all' => 'Toute l\'activité du site',
	'river:mine' => 'Mon activité',
	'river:owner' => 'Activité de %s',
	'river:friends' => 'Activités des contacts',
	'river:select' => '%s',
	'river:comments:more' => '+%u autres',
	'river:comments:all' => 'Voir tous les %u commentaires',
	'river:generic_comment' => 'a commenté %s %s',

/**
 * Icons
 */

	'icon:size' => "Taille d'icône",
	'icon:size:topbar' => "Topbar (minuscule)",
	'icon:size:tiny' => "Tout petit",
	'icon:size:small' => "Petit",
	'icon:size:medium' => "Moyen",
	'icon:size:large' => "Grand",
	'icon:size:master' => "Très grand",
	
	'entity:edit:icon:crop_messages:generic' => "L'image sélectionnée ne correspond pas aux dimensions recommandées. Les icônes résultantes pourraient être de mauvaise qualité.",
	'entity:edit:icon:crop_messages:width' => "Il est recommandé d'utiliser une image avec une largeur minimale d'au moins %d px.",
	'entity:edit:icon:crop_messages:height' => "Il est recommandé d'utiliser une image avec une hauteur minimale d'au moins %d px.",
	'entity:edit:icon:file:label' => "Chargez une nouvelle icône",
	'entity:edit:icon:file:help' => "Laissez vide pour conserver l'icône actuelle.",
	'entity:edit:icon:remove:label' => "Supprimez l'icône",

/**
 * Generic action words
 */

	'save' => "Enregistrer",
	'save_go' => "Enregistrer, et aller vers %s",
	'reset' => 'Réinitialiser',
	'publish' => "Publier",
	'cancel' => "Annuler",
	'saving' => "Enregistrement en cours ...",
	'update' => "Mettre à jour",
	'preview' => "Prévisualiser",
	'edit' => "Modifier",
	'delete' => "Supprimer",
	'accept' => "Accepter",
	'reject' => "Rejeter",
	'decline' => "Décliner",
	'approve' => "Accepter",
	'activate' => "Activer",
	'deactivate' => "Désactiver",
	'disapprove' => "Désapprouver",
	'revoke' => "Révoquer",
	'load' => "Charger",
	'upload' => "Charger",
	'download' => "Télécharger",
	'ban' => "Bannir",
	'unban' => "Réintégrer",
	'banned' => "Banni",
	'enable' => "Activer",
	'disable' => "Désactiver",
	'request' => "Demander",
	'complete' => "complet",
	'open' => 'Ouvrir',
	'close' => 'Fermer',
	'hide' => 'Cacher',
	'show' => 'Montrer',
	'reply' => "Répondre",
	'more' => 'Plus',
	'more_info' => 'Plus d\'informations',
	'comments' => 'Commentaires',
	'import' => 'Importer',
	'export' => 'Exporter',
	'untitled' => 'Sans titre',
	'help' => 'Aide',
	'send' => 'Envoyer',
	'post' => 'Publier',
	'submit' => 'Soumettre',
	'comment' => 'Commenter',
	'upgrade' => 'Mettre à niveau',
	'sort' => 'Trier',
	'filter' => 'Filtrer',
	'new' => 'Nouveau',
	'add' => 'Ajouter',
	'create' => 'Créer',
	'remove' => 'Enlever',
	'revert' => 'Rétablir',
	'validate' => 'Valider',
	'read_more' => 'Lire la suite',
	'next' => 'Suivant',
	'previous' => 'Précédent',
	'older' => 'Plus ancien',
	'newer' => 'Plus récent',
	
	'site' => 'Site',
	'activity' => 'Activité',
	'members' => 'Membres',
	'menu' => 'Menu',
	'item' => 'Élément',

	'up' => 'Monter',
	'down' => 'Descendre',
	'top' => 'Tout en haut',
	'bottom' => 'Tout en bas',
	'right' => 'Droite',
	'left' => 'Gauche',
	'back' => 'Retour',

	'invite' => "Inviter",

	'resetpassword' => "Réinitialiser le mot de passe",
	'changepassword' => "Changer le mot de passe",
	'makeadmin' => "Rendre administrateur",
	'removeadmin' => "Retirer administrateur",

	'option:yes' => "Oui",
	'option:no' => "Non",

	'unknown' => 'Inconnu',
	'never' => 'Jamais',

	'active' => 'Activé',
	'total' => 'Total',
	'unvalidated' => 'Non validés',
	
	'ok' => 'OK',
	'any' => 'N\'importe lequel',
	'error' => 'Erreur',

	'other' => 'Autre',
	'options' => 'Options',
	'advanced' => 'Avancé',

	'learnmore' => "Cliquer ici pour en savoir plus.",
	'unknown_error' => 'Erreur inconnue',

	'content' => "contenu",
	'content:latest' => 'Dernière activité',
	'content:latest:blurb' => 'Vous pouvez également cliquer ici pour voir les dernières publications sur le site.',
	
	'list:out_of_bounds' => "Vous avez atteint une partie de la liste sans aucun contenu, toutefois il y a du contenu disponible.",
	'list:out_of_bounds:link' => "Revenir à la première page de cette liste.",

	'link:text' => 'voir le lien',

/**
 * Generic questions
 */

	'question:areyousure' => 'Confirmez-vous ?',

/**
 * Status
 */

	'status' => 'Statut',
	'status:unsaved_draft' => 'Brouillon non enregistré',
	'status:draft' => 'Brouillon',
	'status:unpublished' => 'Non publié',
	'status:published' => 'Publié',
	'status:featured' => 'En vedette',
	'status:open' => 'Ouvert',
	'status:closed' => 'Fermé',
	'status:enabled' => 'Activé',
	'status:disabled' => 'Désactivé',
	'status:unavailable' => 'Indisponible',
	'status:active' => 'Activé',
	'status:inactive' => 'Inactif',

/**
 * Generic sorts
 */

	'sort:newest' => 'Date',
	'sort:popular' => 'Popularité',
	'sort:alpha' => 'Alphabétique',
	'sort:priority' => 'Priorité',

/**
 * Generic data words
 */

	'title' => "Titre",
	'description' => "Description",
	'tags' => "Tags",
	'all' => "Tout",
	'mine' => "Moi",

	'by' => 'par',
	'none' => 'aucun',

	'annotations' => "Annotations",
	'relationships' => "Relations",
	'metadata' => "Métadonnées",
	'tagcloud' => "Nuage de tags",

	'on' => 'Activé',
	'off' => 'Désactivé',

	'number_counter:separatorr' => ".",
	'number_counter:view:thousand' => "%sK",
	'number_counter:view:million' => "%sM",
	'number_counter:view:billion' => "%sB",
	'number_counter:view:trillion' => "%sT",

/**
 * Entity actions
 */

	'edit:this' => 'Modifier cet élément',
	'delete:this' => 'Supprimer cet élément',
	'comment:this' => 'Commenter cet élément',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Confirmez-vous vouloir supprimer cet élément ?",
	'deleteconfirm:plural' => "Confirmez-vous vouloir supprimer ces éléments ?",
	'fileexists' => "Un fichier a déjà été chargé. Pour le remplacer, sélectionnez un nouveau fichier ci-dessous",
	'input:file:upload_limit' => 'La taille maximale de fichier autorisée est %s',

/**
 * User add
 */

	'useradd:subject' => 'Compte utilisateur créé',
	'useradd:body' => 'Un compte utilisateur a été créé pour vous sur %s. Pour vous connecter :

%s

Et connectez-vous avec les identifiants suivants :

Identifiant : %s
Mot de passe : %s
Vous pouvez également utiliser votre adresse email à la place de votre identifiant.

Après connexion, nous vous recommandons de changer votre mot de passe.',

/**
 * System messages
 */

	'systemmessages:dismiss' => "Cliquer pour fermer",


/**
 * Messages
 */
	'messages:title:success' => 'Succès',
	'messages:title:error' => 'Erreur',
	'messages:title:warning' => 'Avertissement',
	'messages:title:help' => 'Aide',
	'messages:title:notice' => 'Information',
	'messages:title:info' => 'Information',

/**
 * Import / export
 */

	'importsuccess' => "L'import des données a réussi",
	'importfail' => "L'import des données OpenDD a échoué.",

/**
 * Time
 */

	'input:date_format' => 'Y-m-d',
	'input:date_format:datepicker' => 'yy-mm-dd', // jQuery UI datepicker format
	'input:time_format' => 'g:ia',

	'friendlytime:justnow' => "à l'instant",
	'friendlytime:minutes' => "il y a %s minutes",
	'friendlytime:minutes:singular' => "il y a une minute",
	'friendlytime:hours' => "il y a %s heures",
	'friendlytime:hours:singular' => "il y a une heure",
	'friendlytime:days' => "il y a %s jours",
	'friendlytime:days:singular' => "hier",
	'friendlytime:date_format' => 'j F Y @ G:i',
	'friendlytime:date_format:short' => 'j M Y',

	'friendlytime:future:minutes' => "dans %s minutes",
	'friendlytime:future:minutes:singular' => "dans une minute",
	'friendlytime:future:hours' => "dans %s heures",
	'friendlytime:future:hours:singular' => "dans une heure",
	'friendlytime:future:days' => "dans %s jours",
	'friendlytime:future:days:singular' => "demain",

	'date:month:01' => 'Janvier %s',
	'date:month:02' => 'Février %s',
	'date:month:03' => 'Mars %s',
	'date:month:04' => 'Avril %s',
	'date:month:05' => 'Mai %s',
	'date:month:06' => 'Juin %s',
	'date:month:07' => 'Juillet %s',
	'date:month:08' => 'Août %s',
	'date:month:09' => 'Septembre %s',
	'date:month:10' => 'Octobre %s',
	'date:month:11' => 'Novembre %s',
	'date:month:12' => 'Décembre %s',

	'date:month:short:01' => 'Jan %s',
	'date:month:short:02' => 'Fév %s',
	'date:month:short:03' => 'Mar %s',
	'date:month:short:04' => 'Avr %s',
	'date:month:short:05' => 'Mai %s',
	'date:month:short:06' => 'Jui %s',
	'date:month:short:07' => 'Jui %s',
	'date:month:short:08' => 'Aou %s',
	'date:month:short:09' => 'Sep %s',
	'date:month:short:10' => 'Oct %s',
	'date:month:short:11' => 'Nov %s',
	'date:month:short:12' => 'Déc %s',

	'date:weekday:0' => 'Dimanche',
	'date:weekday:1' => 'Lundi',
	'date:weekday:2' => 'Mardi',
	'date:weekday:3' => 'Mercredi',
	'date:weekday:4' => 'Jeudi',
	'date:weekday:5' => 'Vendredi',
	'date:weekday:6' => 'Samedi',

	'date:weekday:short:0' => 'Dim',
	'date:weekday:short:1' => 'Lun',
	'date:weekday:short:2' => 'Mar',
	'date:weekday:short:3' => 'Mer',
	'date:weekday:short:4' => 'Jeu',
	'date:weekday:short:5' => 'Ven',
	'date:weekday:short:6' => 'Sam',

	'interval:minute' => 'Toutes les minutes',
	'interval:fiveminute' => 'Toutes les 5 minutes',
	'interval:fifteenmin' => 'Toutes les 15 minutes',
	'interval:halfhour' => 'Toutes les demi-heures',
	'interval:hourly' => 'Toutes les heures',
	'interval:daily' => 'Tous les jours',
	'interval:weekly' => 'Toutes les semaines',
	'interval:monthly' => 'Tous les mois',
	'interval:yearly' => 'Tous les ans',

/**
 * System settings
 */

	'installation:sitename' => "Le nom de votre site :",
	'installation:sitedescription' => "Brève description du site (facultatif) : ",
	'installation:sitedescription:help' => "Avec les plugins empaquetés ceci n'apparaît que dans les métadonnées de description pour les résultats des moteurs de recherche.",
	'installation:wwwroot' => "L'URL du site :",
	'installation:path' => "Le chemin complet de votre installation de Elgg :",
	'installation:dataroot' => "Le chemin complet du dossier de données :",
	'installation:dataroot:warning' => "Vous devez créer ce répertoire manuellement. Il doit se situer dans un répertoire différent de celui de votre installation de Elgg.",
	'installation:sitepermissions' => "Les niveaux d’accès par défaut : ",
	'installation:language' => "La langue par défaut de votre site : ",
	'installation:debug' => "Permet de contrôler la quantité d'information écrite dans les journaux du serveur. Attention car cela ralentit l'accès au site, et ne devrait être utilisé qu'en cas de problème.",
	'installation:debug:label' => "Niveau de journalisation :",
	'installation:debug:none' => 'Désactivé (recommandé en production)',
	'installation:debug:error' => 'Seulement les erreurs critiques',
	'installation:debug:warning' => 'Erreurs et avertissements',
	'installation:debug:notice' => 'Toutes les erreurs, avertissements et avis',
	'installation:debug:info' => 'Enregistrer tout',

	// Walled Garden support
	'installation:registration:description' => 'L\'enregistrement de nouveaux comptes utilisateurs est activé par défaut. Désactivez cette option si vous ne voulez pas que de nouvelles personnes soient en mesure de s\'inscrire d\'elles-mêmes.',
	'installation:registration:label' => 'Permettre à de nouveaux utilisateurs de s\'enregistrer',
	'installation:adminvalidation:description' => 'Si activé, les utilisateurs nouvellement inscrits doivent être validés par un administrateur avant de pouvoir utiliser le site.',
	'installation:adminvalidation:label' => 'Les nouveaux utilisateurs doivent être validés manuellement par un administrateur',
	'installation:adminvalidation:notification:description' => 'SI activé, les administrateurs du site recevront une notification qui indique qu\'il y a des utilisateurs en attente de validation. Chaque administrateur peut désactiver la notification sur sa page de paramètres personnels.',
	'installation:adminvalidation:notification:label' => 'Notifier les administrateurs des utilisateurs en attente de validation',
	'installation:adminvalidation:notification:direct' => 'Direct',
	'installation:walled_garden:description' => 'Activez cette option pour faire du site un réseau privé. Cela permet d\'éviter que les non-membres puissent visiter d\'autres pages que celles expressément spécifiées comme publiques (comme par exemple la page de connexion et d\'inscription).',
	'installation:walled_garden:label' => 'Restreindre l\'accès au site aux membres connectés',

	'installation:view' => "Entrez le nom de la vue qui sera utilisée par défaut pour l'affichage du site, ou laissez vide pour la vue par défaut (en cas de doute, laissez la valeur par défaut) :",

	'installation:siteemail' => "L'adresse email du site (utilisée lors de l'envoi d'emails par le système)",
	'installation:siteemail:help' => "Attention : N'utilisez pas une adresse email que vous pourriez avoir associé avec un autre service tiers, tels qu'un système de gestions de tickets, qui effectue des analyses des emails entrants, car cela peut vous exposer vous et vos utilisateurs à la fuite non intentionnelle de données privées et de jetons de sécurité. Dans l'idéal, créez une nouvelle adresse email dédiée qui ne va servir que pour ce site.",
	'installation:default_limit' => "Nombre d'éléments par page par défaut",

	'admin:site:access:warning' => "Le niveau d'accès suggéré aux utilisateurs lorsqu'ils créent un nouveau contenu. Modifier ce réglage n'affectera que les publications créées dans le futur.",
	'installation:allow_user_default_access:description' => "Activez ce réglage pour permettre aux utilisateurs de définir leur propre niveau d'accès par défaut, qui remplace celui défini par défaut pour le site.",
	'installation:allow_user_default_access:label' => "Autoriser un niveau d’accès par défaut pour chaque utilisateur",

	'installation:simplecache:description' => "Le cache simple augmente les performances en mettant en cache du contenu statique comme des fichiers CSS et Javascript.",
	'installation:simplecache:label' => "Utiliser le cache simple (recommandé)",

	'installation:cache_symlink:description' => "Le lien symbolique vers le répertoire du cache simple permet au serveur de servir des vues statiques en passant outre le moteur, ce qui améliore considérablement les performances et réduit la charge du serveur",
	'installation:cache_symlink:label' => "Utiliser un lien symbolique vers le répertoire du cache simple (recommandé)",
	'installation:cache_symlink:warning' => "Le lien symbolique a été établi. Si, pour quelque raison que ce soit, vous souhaitez supprimer le lien, effacez le lien symbolique vers le répertoire de votre serveur.",
	'installation:cache_symlink:paths' => 'Un lien symbolique correctement configuré doit lier <i>%s</i> vers <i>%s</i>',
	'installation:cache_symlink:error' => "EN raison de la configuration de votre serveur, le lien symbolique ne peut pas être créé automatiquement. Veuillez vous référer à la document pour créer le lien symbolique manuellement.",

	'installation:minify:description' => "Le cache simple peut également améliorer les performances en compressant les fichiers JavaScript et CSS. (Le cache simple doit être activé.)",
	'installation:minify_js:label' => "Compresser le JavaScript (recommandé)",
	'installation:minify_css:label' => "Compresser les CSS (recommandé)",

	'installation:htaccess:needs_upgrade' => "Vous devez mettre à jour votre fichier .htaccess afin que le chemin soit injecté dans le paramètre GET __elgg_uri (vous pouvez utiliser le fichier install/config/htaccess_dist comme modèle)",
	'installation:htaccess:localhost:connectionfailed' => "Elgg ne peut pas se connecter à lui-même pour tester les règles de réécriture correctement. Veuillez vérifier que curl fonctionne, et qu'il n'y a pas de restriction au niveau des IP interdisant les connexions depuis localhost.",

	'installation:systemcache:description' => "Le cache système diminue le temps de chargement du moteur Elgg en mettant en cache les données dans des fichiers.",
	'installation:systemcache:label' => "Utiliser le cache système (recommandé)",

	'admin:legend:system' => 'Système',
	'admin:legend:caching' => 'Mise en cache',
	'admin:legend:content' => 'Contenu',
	'admin:legend:content_access' => 'Niveau d\'accès des contenus',
	'admin:legend:site_access' => 'Accès au site',
	'admin:legend:debug' => 'Débogage et journalisation',
	
	'config:i18n:allowed_languages' => "Langues autorisées",
	'config:i18n:allowed_languages:help' => "Seules les langues autorisées peuvent être utilises par les utilisateurs. L'anglais et la langue du site sont toujours autorisés.",
	'config:users:can_change_username' => "Permettre aux membres de modifier leur nom d'utilisateur",
	'config:users:can_change_username:help' => "Si interdit, seuls les admins peuvent changer l'identifiant d'un membre",
	'config:remove_branding:label' => "Retirer le logo Elgg",
	'config:remove_branding:help' => "Il existe divers liens et logos à travers le site qui indiquent le ce site a été réalisé en utilisant Elgg. Si vous supprimez toute mention d'Elgg veuillez envisager une donation via https://elgg.org/about/supporters",
	'config:disable_rss:label' => "Désactiver les flux RSS",
	'config:disable_rss:help' => "Désactivez cette option pour ne plus proposer de flux RSS",
	'config:friendly_time_number_of_days:label' => "Nombre de jours pendant lesquels la date relative est présentée",
	'config:friendly_time_number_of_days:help' => "Vous pouvez définir pendant combien de jours la date relative sera affichée. Après le nombre de jours indiqué la date prendra la forme classique. Indiquez 0 pour ne pas utiliser de date relative.",
	'config:content:comment_box_collapses' => "La boîte de commentaires se replie après le premier commentaire sur le contenu",
	'config:content:comment_box_collapses:help' => "Ceci ne s'applique que si la liste des commentaires est triée avec le plus récent en premier",
	'config:content:comments_latest_first' => "Les commentaires devraient être listés avec le commentaire le plus récent en premier",
	'config:content:comments_latest_first:help' => "Ceci contrôle le comportement par défaut de la liste des commentaires sur une page d'information d'un contenu. Si désactivé ceci va également déplacer la boîte de commentaires à la fin de la liste des commentaires",
	'config:content:comments_per_page' => "Le nombre de commentaires par page",
	'config:content:pagination_behaviour' => "Comportement de pagination par défaut des listes",
	'config:content:pagination_behaviour:help' => "Contrôle la façon dont les données de la liste sont mises à jour lors de l'utilisation de la pagination. Les listes individuelles peuvent remplacer ce comportement par défaut.",
	'config:content:pagination_behaviour:navigate' => "Aller à la page suivante",
	'config:content:pagination_behaviour:ajax-replace' => "Remplacer les données de la liste sans recharger toute la page",
	'config:content:pagination_behaviour:ajax-append' => "Ajouter les nouvelles données au début ou à la fin de la liste",
	'config:content:pagination_behaviour:ajax-append-auto' => "Ajoute les nouvelles données au début ou à la fin de la liste (automatiquement en cas de scroll dans la vue)",
	'config:email' => "Email",
	'config:email_html_part:label' => "Activer les emails en HTML",
	'config:email_html_part:help' => "Les emails sortants seront intégrés dans un template HTML",
	'config:email_html_part_images:label' => "Remplacer les images des emails",
	'config:email_html_part_images:help' => "Contrôle si et comment les images des emails sortants doivent être traitées. Si activé, toutes les images seront intégrées dans les emails. Tous les clients de messagerie ne prennent pas en charge les différentes options, assurez-vous de tester l'option choisie.",
	'config:email_html_part_images:base64' => "Encodage en Base64",
	'config:email_html_part_images:attach' => "Pièces jointes",
	'config:delayed_email:label' => "Activer les emails de notification différés",
	'config:delayed_email:help' => "Offre aux utilisateurs des notifications par email différées qui regroupent les notifications reçues au cours d'une période (quotidienne, hebdomadaire)",

	'upgrading' => 'Mise à niveau en cours...',
	'upgrade:core' => 'Votre installation d\'Elgg a été mise à niveau.',
	'upgrade:unlock' => 'Déverrouiller la mise à niveau',
	'upgrade:unlock:confirm' => "La base de données est verrouillée par une autre mise à niveau. Exécuter des mises à jours simultanées est dangereux. Vous devriez continuer seulement si vous savez qu'il n'y a pas d'autre mise à jour en cours d'exécution. Déverrouiller ?",
	'upgrade:terminated' => 'La mise à niveau a été interrompue par un gestionnaire d\'événement',
	'upgrade:locked' => "Impossible de mettre à niveau. Une autre mise à niveau est en cours. Pour supprimer le verrouillage de la mise à jour, visitez la partie administrateur.",
	'upgrade:unlock:success' => "Mise à niveau débloquée.",
	'upgrade:unable_to_upgrade' => 'Impossible de mettre à niveau.',
	'upgrade:unable_to_upgrade_info' => 'Cette installation ne peut pas être mise à jour, car des vues anciennes
ont été détectées dans le répertoire des vues du noyau de Elgg. Ces vues sont obsolètes et doivent être
supprimés pour que Elgg fonctionne correctement. Si vous n\'avez pas modifié les fichiers du noyau d\'Elgg, vous pouvez
simplement supprimer le répertoire des vues (views) et le remplacer par celui de la dernière
version de Elgg téléchargée depuis <a href="https://elgg.org">elgg.org</a>.<br /><br />

Si vous avez besoin d\'instructions détaillées, veuillez visiter la <a href="http://learn.elgg.org/en/stable/admin/upgrading.html">
documentation sur la Mise à niveau de Elgg</a>. Si vous avez besoin d\'assistance, veuillez écrire dans les 
<a href="https://elgg.org/discussion/all">Forums d\'Aide de la Communauté Elgg</a>.',

	'update:oauth_api:deactivated' => 'Le plugin OAuth API (précédemment OAuth Lib) a été désactivé lors de la mise à niveau. Veuillez l\'activer manuellement si nécessaire.',
	'upgrade:site_secret_warning:moderate' => "Vous êtes encouragé à régénérer la clé du site afin d'améliorer la sécurité du système. Voir dans Configuration / Paramètres avancés",
	'upgrade:site_secret_warning:weak' => "Vous êtes fortement encouragé à régénérer la clé du site afin d'améliorer la sécurité du système. Voir dans Configuration / Paramètres avancés",

	'admin:pending_upgrades' => 'Le site a des mises à niveau en attente qui nécessitent votre attention immédiate.',
	'admin:view_upgrades' => 'Afficher les mises à niveau en attente.',
	'item:object:elgg_upgrade' => 'Mises à niveau du site',
	'collection:object:elgg_upgrade' => 'Mises à niveau du site',
	'admin:upgrades:none' => 'Votre installation est à jour !',

	'upgrade:item_count' => '<b>%s</b> éléments ont besoin d\'être mis à niveau.',
	'upgrade:warning' => '<b>Attention :</b> Sur un grand site cette mise à jour peut prendre un temps significativement long !',
	'upgrade:success_count' => 'Mis à niveau :',
	'upgrade:error_count' => 'Erreurs : %s',
	'upgrade:finished' => 'Mise à jour terminée',
	'upgrade:finished_with_errors' => 'La mise à niveau s\'est terminée avec des erreurs. Rafraîchissez la page et tentez de relancer la mise à niveau.<p></p><br />Si l\'erreur se produit à nouveau, vérifiez les journaux d\'erreur du serveur web pour identifier une cause possible. Vous pouvez demander de l\'aide pour résoudre cette erreur dans le <a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">groupe de support technique</a> de la communauté Elgg.</p>',
	'upgrade:should_be_skipped' => 'Aucun élément à mettre à niveau',
	'upgrade:count_items' => '%d élément(s) à mettre à niveau',
	
	// Strings specific for the database guid columns reply upgrade
	'admin:upgrades:database_guid_columns' => 'Aligner les colonnes GUID de la base de données',
	
/**
 * Welcome
 */

	'welcome' => "Bienvenue",
	'welcome:user' => 'Bienvenue %s',

/**
 * Emails
 */

	'email:from' => 'De',
	'email:to' => 'Pour',
	'email:subject' => 'Sujet',
	'email:body' => 'Corps de l\'article',

	'email:settings' => "Paramètres e-mail",
	'email:address:label' => "Adresse e-mail",
	'email:address:help:confirm' => "Adresse email en attente modifiée pour '%s', veuillez vérifier votre boîte mail pour les instructions.",
	'email:address:password' => "Mot de passe",
	'email:address:password:help' => "Pour pouvoir changer votre adresse email vous devez fournir votre mot de passe actuel.",

	'email:save:success' => "Nouvelle adresse email enregistrée. Une vérification a été envoyée pour confirmer l'adresse.",
	'email:save:fail' => "Votre nouvelle adresse email n'a pas pu être enregistrée.",
	'email:save:fail:password' => "Le mot de passe ne correspond pas à votre mot de passe actuel, impossible de modifier votre adresse email",

	'friend:newfriend:subject' => "%s vous a ajouté comme contact !",
	'friend:newfriend:body' => "%s vous a ajouté comme contact !

Pour voir son profil :

%s",

	'email:changepassword:subject' => "Mot de passe modifié !",
	'email:changepassword:body' => "Votre mot de passe a été modifié.",

	'email:resetpassword:subject' => "Mot de passe réinitialisé !",
	'email:resetpassword:body' => "Un nouveau mot de passe a été créé automatiquement : %s",

	'email:changereq:subject' => "Demander un nouveau mot de passe.",
	'email:changereq:body' => "Quelqu'un (depuis l'adresse IP %s) a demandé à changer le mot de passe de ce compte.

Si vous êtes à l'origine de cette demande, cliquez sur le lien suivant. Sinon ignorez cet email.

%s",
	
	'account:email:request:success' => "Votre nouvelle adresse email sera enregistrée après confirmation, veuillez vérifier la boîte de réception de '%s' pour plus d'instructions.",
	'email:request:email:subject' => "Veuillez confirmer votre adresse email",
	'email:request:email:body' => "Vous avez demandé la modification de votre adresse email sur '%s'.
Si vous n'êtes pas à l'origine de cette demande, veuillez ignorer cet email.

Afin de confirmer la modification de l'adresse email, veuillez cliquer sur ce lien :
%s

Veuillez noter que ce lien est valable 1 heure.",
	
	'account:email:request:error:no_new_email' => "Aucun changement d'adresse email en attente",
	
	'email:confirm:email:old:subject' => "Votre adresse email a été modifiée",
	'email:confirm:email:old:body' => "Votre adresse email sur '%s' a été modifiée.
Désormais, vous recevrez les notifications sur '%s'.

Si vous n'êtes pas à l'origine de cette modification, veuillez contacter un administrateur du site.
%s",
	
	'email:confirm:email:new:subject' => "Votre adresse email a été modifiée",
	'email:confirm:email:new:body' => "Votre adresse email sur '%s' a été modifiée.
Désormais, vous recevrez les notifications sur cette adresse email.

Si vous n'êtes pas à l'origine de cette modification, veuillez contacter un administrateur du site.
%s",

	'account:email:admin:validation_notification' => "Me notifier quand des utilisateurs sont en attente de validation par un administrateur",
	'account:email:admin:validation_notification:help' => "En raison des réglages du site, les utilisateurs nouvellement inscrits doivent être approuvés manuellement par un administrateur. Avec ce réglage, vous pouvez désactiver les notifications au sujet des demandes de validation en attente.",
	
	'account:validation:pending:title' => "Validation de compte en attente",
	'account:validation:pending:content' => "Votre compte a bien été créé ! Toutefois, avant de pouvoir l'utiliser, un administrateur doit valider votre compte. Vous recevrez un email quand votre compte aura été validé.",
	
	'account:notification:validation:subject' => "Votre compte sur %s a bien été validé !",
	'account:notification:validation:body' => "Votre compte sur '%s' a été validé. Vous pouvez maintenant utiliser votre compte.

Pour vous rendre sur le site :
%s",

/**
 * user default access
 */

	'default_access:settings' => "Votre niveau d'accès par défaut",
	'default_access:label' => "Niveau d'accès par défaut",
	'user:default_access:success' => "Votre nouveau niveau d'accès par défaut a été enregistré.",
	'user:default_access:failure' => "Votre nouveau niveau d'accès par défaut n'a pas pu être enregistré.",

/**
 * Comments
 */

	'comments:count' => "%s commentaire(s)",
	'item:object:comment' => 'Commentaires',
	'collection:object:comment' => 'Commentaires',
	'notification:object:comment:create' => "Envoyer une notification quand un commentaire est créé",

	'river:object:default:comment' => '%s a commenté %s',

	'generic_comments:add' => "Laisser un commentaire",
	'generic_comments:edit' => "Modifier le commentaire",
	'generic_comments:post' => "Publier un commentaire",
	'generic_comments:text' => "Commentaire",
	'generic_comments:latest' => "Derniers commentaires",
	'generic_comment:posted' => "Votre commentaire a bien été publié.",
	'generic_comment:updated' => "Le commentaire a bien été mis à jour.",
	'entity:delete:object:comment:success' => "Le commentaire a bien été supprimé.",
	'generic_comment:blank' => "Désolé, vous devez écrire quelque chose dans votre commentaire avant de pouvoir l'enregistrer.",
	'generic_comment:notfound' => "Désolé, l'élément recherché n'a pas été trouvé.",
	'generic_comment:notfound_fallback' => "Désolé, le commentaire demandé n'a pas été trouvé, mais vous avez été redirigé sur la page sur laquelle il avait été publié.",
	'generic_comment:failure' => "Une erreur inattendue s'est produite pendant l'enregistrement du commentaire.",
	'generic_comment:none' => 'Pas de commentaire',
	'generic_comment:title' => 'Commentaire de %s',
	'generic_comment:on' => '%s %s',
	'generic_comments:latest:posted' => 'a publié un',

	'generic_comment:notification:subject' => 'Re: %s',
	'generic_comment:notification:owner:summary' => 'Vous avez un nouveau commentaire sur : %s',
	'generic_comment:notification:owner:body' => "Vous avez un nouveau commentaire sur votre publication :

%s

Pour répondre ou voir la publication originale :
%s",
	
	'generic_comment:notification:user:summary' => 'Nouveau commentaire sur : %s',
	'generic_comment:notification:user:body' => "Un nouveau commentaire a été fait :

%s

Pour y répondre ou voir la publication originale :
%s",

/**
 * Entities
 */

	'byline' => 'Par %s',
	'byline:ingroup' => 'dans le groupe %s',
	'entity:default:missingsupport:popup' => 'Cette entité ne peut pas être affichée correctement. Il se peut que ce soit à cause d\'un plugin qui n\'est plus installé ou activé.',

	'entity:delete:item' => 'Objet',
	'entity:delete:item_not_found' => 'Objet non trouvé.',
	'entity:delete:permission_denied' => 'Vous n\'avez pas les permissions nécessaires pour supprimer cet objet.',
	'entity:delete:success' => 'L\'entité %s a été supprimée',
	'entity:delete:fail' => 'L\'entité %s n\'a pas pu être supprimée',
	
	'entity:subscribe' => "S'abonner",
	'entity:subscribe:success' => "Vous vous êtes bien abonné à %s",
	'entity:subscribe:fail' => "Une erreur est survenue lors de l'abonnement à %s",
	
	'entity:unsubscribe' => "Se désabonner",
	'entity:unsubscribe:success' => "Vous vous êtes bien désabonné de %s",
	'entity:unsubscribe:fail' => "Une erreur est survenue lors du désabonnement de %s",
	
	'entity:mute' => "Interrompre les notifications",
	'entity:mute:success' => "Vous avez bien interrompu les notifications de %s",
	'entity:mute:fail' => "Une erreur est survenue lors de l'interruption des notifications de %s",
	
	'entity:unmute' => "Réactiver les notifications",
	'entity:unmute:success' => "Vous avez bien réactivé les notifications de %s",
	'entity:unmute:fail' => "Une erreur est survenue lors de la réactivation des notifications de %s",
	
	'entity:can_delete:invaliduser' => 'Impossible de vérifier ->canDelete() pour l\'utilisateur de user_guid [%s] car l\'utilisateur n\'existe pas.',

/**
 * Annotations
 */
	
	'annotation:delete:fail' => "Une erreur est survenue lors de la suppression de l'annotation",
	'annotation:delete:success' => "L'annotation a bien été supprimée",
	
/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => 'Votre session de connexion n\'est plus valide : session ou jetons de sécurité __token ou __ts manquants. Veuillez recharger la page pour continuer',
	'actiongatekeeper:tokeninvalid' => "La page que vous utilisiez a expiré. Veuillez réessayer.",
	'actiongatekeeper:timeerror' => 'La page que vous utilisiez a expiré. Veuillez la recharger et réessayer.',
	'actiongatekeeper:pluginprevents' => 'Désolé. Un plugin a empêché ce formulaire d\'être envoyé',
	'actiongatekeeper:uploadexceeded' => 'La taille du ou des fichier(s) dépasse la limite définie par l\'administrateur du site',
	'actiongatekeeper:crosssitelogin' => "Désolé, il n'est pas permis de se connecter depuis un autre nom de domaine. Veuillez réessayer.",

/**
 * Word blacklists
 */

	'word:blacklist' => 'alors, au, aucuns, aussi, autre, avant, avec, avoir, bon, ça, car, ce, cela, cette, ces, ceux, cependant, chaque, ci, comme, comment, dans, début, dedans, dehors, depuis, des, devrait, doit, donc, dos, du, elle, elles, en, encore, essai, est, et, étaient, état, été, étions, être, eu, fait, faites, fois, font, hors, ici, il, ils, je, juste, la, là, le, les, leur, lui, ma, maintenant, mais, malgré, même, mes, moins, mon, mot, ni, nommés, notre, nous, ou, où, par, parce, pas, pendant, peu, peut, plupart, plutôt, pour, pourquoi, quand, que, quel, quelle, quelles, quels, qui, sa, sans, ses, seulement, si, sien, son, sont, sous, soyez, sujet, sur, ta, tandis, tellement, tels, tes, ton, tous, tout, toutefois, très, trop, tu, un, une, voient, vont, votre, vous, vu',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Impossible de contacter %s. Vous risquez de ne pas pouvoir enregistrer le contenu. Veuillez rafraîchir cette page.',
	'js:security:token_refreshed' => 'La connexion à %s a été rétablie !',
	'js:lightbox:current' => "image %s de %s",

/**
 * Diagnostics
 */
	'diagnostics:report' => 'Rapport de diagnostic',
	'diagnostics:description' => 'Le rapport de diagnostic suivant peut être utile pour diagnostiquer des problèmes avec Elgg. Les développeurs d\'Elgg peuvent vous demander de le joindre à un rapport de bogue.',
	'diagnostics:header' => '========================================================================
Rapport de diagnostic de Elgg
Généré %s par %s
========================================================================

',
	'diagnostics:report:basic' => '
Elgg %s, version %s

------------------------------------------------------------------------',
	'diagnostics:report:php' => '
PHP info:
%s
------------------------------------------------------------------------',
	'diagnostics:report:md5' => '
Fichiers installés et checksums:

%s
------------------------------------------------------------------------',
	'diagnostics:report:globals' => '
Variables globales :

%s
------------------------------------------------------------------------',
	
/**
 * Miscellaneous
 */
	'elgg:powered' => "Propulsé par Elgg",
	
/**
 * Cli commands
 */
	'cli:login:error:unknown' => "Impossible de se connecter en tant que %s",
	'cli:login:success:log' => "Connecté en tant que %s [guid : %s]",
	'cli:response:output' => "Réponse :",
	'cli:option:as' => "Exécuter la commande au nom d'un utilisateur avec le nom d'utilisateur donné",
	'cli:option:language' => "Exécuter la commande dans la langue donnée (par ex. fr, en, ou nl)",
	
	'cli:cache:clear:description' => "Vider les caches d'Elgg",
	'cli:cache:invalidate:description' => "Invalider les caches d'Elgg",
	'cli:cache:purge:description' => "Purger les caches d'Elgg",
	
	'cli:cron:description' => "Exécuter les gestionnaires de cron pour tout ou pour les intervalles spécifiés",
	'cli:cron:option:interval' => "Nom de l’intervalle (par ex. hourly)",
	'cli:cron:option:force' => "Forcer les commandes cron à s'exécuter même si elles ne sont pas encore à échéance",
	'cli:cron:option:time' => "Heure d'initialisation du cron",
	
	'cli:database:seed:description' => "Ensemence la base de données avec de fausses entités",
	'cli:database:seed:argument:create' => "Toujours créer de nouvelles entités lors de l'ensemencement",
	'cli:database:seed:option:limit' => "Nombre d'entités à créer",
	'cli:database:seed:option:image_folder' => "Chemin vers le répertoire local contenant les images pour l'ensemencement",
	'cli:database:seed:option:type' => "Nombre d'entités à créer (ou supprimer) (%s)",
	'cli:database:seed:option:create_since' => "Une chaîne d'heure PHP pour définir la limite basse de l'heure de création des entités ensemencées",
	'cli:database:seed:option:create_until' => "Une chaîne d'heure PHP pour définir la limite haute de l'heure de création des entités ensemencées",
	'cli:database:seed:log:error:faker' => "Ceci est un outil pour développeurs actuellement destiné à des fins de tests seulement. Veuillez éviter de les utiliser.",
	'cli:database:seed:log:error:logged_in' => "L'ensemencement de la base de donnée ne devrait pas être exécutée avec un utilisateur connecté",
	
	'cli:database:unseed:description' => "Supprime de la base de donnée les fausses entités issues de l'ensemencement",
	
	'cli:plugins:activate:description' => "Activer le(s) plugin(s)",
	'cli:plugins:activate:option:force' => "Résoudre les conflits en désactivant les plugins en conflit et en activant ceux requis",
	'cli:plugins:activate:argument:plugins' => "IDs des plugins à activer",
	'cli:plugins:activate:progress:start' => "Activation des plugins",
	
	'cli:plugins:deactivate:description' => "Désactiver le(s) plugin(s)",
	'cli:plugins:deactivate:option:force' => "Forcer la désactivation de tous les plugins dépendants",
	'cli:plugins:deactivate:argument:plugins' => "IDs des plugins à désactiver",
	'cli:plugins:deactivate:progress:start' => "Désactivation des plugins",
	
	'cli:plugins:list:description' => "Lister tous les plugins installés sur le site",
	'cli:plugins:list:option:status' => "Statut du plugin ( %s )",
	'cli:plugins:list:option:refresh' => "Rafraîchir la liste des plugins avec les plugins récemment installés",
	'cli:plugins:list:error:status' => "%s n'est pas un statut valide. Les options autorisées sont : %s",
	
	'cli:simpletest:description' => "Exécuter la suite de test simpletest (obsolète)",
	'cli:simpletest:option:config' => "Chemin vers le fichier de configuration avec lequel Elgg devrait être amorcé",
	'cli:simpletest:option:plugins' => "Une liste de plugins à activer pour les tests, ou 'all' pour activer tous les plugins",
	'cli:simpletest:option:filter' => "N'exécuter que les tests qui correspondent au motif",
	'cli:simpletest:error:class' => "Vous devez installer votre application Elgg en utilisant '%s'",
	'cli:simpletest:error:file' => "%s n'est pas une classe simpletest valide",
	'cli:simpletest:output:summary' => "Durée : %.2f secondes, Mémoire : %.2f Mo",
	
	'cli:upgrade:batch:description' => "Exécuter une ou plusieurs mises à niveau",
	'cli:upgrade:batch:argument:upgrades' => "Une ou plusieurs mises à niveaux (noms de classes) à exécuter",
	'cli:upgrade:batch:option:force' => "Exécuter les mises à niveau même si elles ont déjà été accomplies auparavant",
	'cli:upgrade:batch:finished' => "Exécution des mises à niveau terminée",
	'cli:upgrade:batch:notfound' => "Aucune classe de mise à niveau trouvée pour %s",

	'cli:upgrade:list:description' => "Liste toutes les mises à niveau du système",
	'cli:upgrade:list:completed' => "Mises à niveau terminées",
	'cli:upgrade:list:pending' => "Mises à niveau en attente",
	'cli:upgrade:list:notfound' => "Aucune mise à niveau trouvée",
	
/**
 * Languages according to ISO 639-1 (with a couple of exceptions)
 */

	"aa" => "Afar",
	"ab" => "Abkhaze",
	"af" => "Afrikaans",
	"am" => "Amharique",
	"ar" => "Arabe",
	"as" => "Assamais",
	"ay" => "Aymara",
	"az" => "Azéri",
	"ba" => "Bachkir",
	"be" => "Biélorusse",
	"bg" => "Bulgare",
	"bh" => "Bihari",
	"bi" => "Bichelamar",
	"bn" => "Bengalî",
	"bo" => "Tibétain",
	"br" => "Breton",
	"ca" => "Catalan",
	"cmn" => "Chinois Mandarin", // ISO 639-3
	"co" => "Corse",
	"cs" => "Tchèque",
	"cy" => "Gallois",
	"da" => "Danois",
	"de" => "Allemand",
	"dz" => "Dzongkha",
	"el" => "Grec",
	"en" => "Anglais",
	"eo" => "Espéranto",
	"es" => "Espagnol",
	"et" => "Estonien",
	"eu" => "Basque",
	"eu_es" => "Basque (Espagne)",
	"fa" => "Persan",
	"fi" => "Finnois",
	"fj" => "Fidjien",
	"fo" => "Féringien",
	"fr" => "Français",
	"fy" => "Frison",
	"ga" => "Irlandais",
	"gd" => "Écossais",
	"gl" => "Galicien",
	"gn" => "Guarani",
	"gu" => "Gujarâtî",
	"he" => "Hébreu",
	"ha" => "Haoussa",
	"hi" => "Hindî",
	"hr" => "Croate",
	"hu" => "Hongrois",
	"hy" => "Arménien",
	"ia" => "Interlingua",
	"id" => "Indonésien",
	"ie" => "Interlingue (ex Occidental)",
	"ik" => "Inupiaq",
	//"in" => "Indonésien",
	"is" => "Islandais",
	"it" => "Italien",
	"iu" => "Inuktitut",
	"iw" => "Hébreu (obsolète)",
	"ja" => "Japonais",
	"ji" => "Yiddish (obsolète)",
	"jw" => "Javanais",
	"ka" => "Géorgien",
	"kk" => "Kazakh",
	"kl" => "Groënlandais (Kalaallisut)",
	"km" => "Khmer",
	"kn" => "Kannara",
	"ko" => "Coréen",
	"ks" => "Kashmiri",
	"ku" => "Kurde",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Lao",
	"lt" => "Lituanien",
	"lv" => "Letton",
	"mg" => "Malgache",
	"mi" => "Maori",
	"mk" => "Macédonien",
	"ml" => "Malayalam",
	"mn" => "Mongol",
	"mo" => "Moldave",
	"mr" => "Marâthî",
	"ms" => "Malais",
	"mt" => "Maltais",
	"my" => "Birman",
	"na" => "Nauru",
	"ne" => "Népalais",
	"nl" => "Néerlandais",
	"no" => "Norvégien",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Panjâbî",
	"pl" => "Polonais",
	"ps" => "Pachto",
	"pt" => "Portugais",
	"pt_br" => "Portugais (Brésil)",
	"qu" => "Quechua",
	"rm" => "Romanche",
	"rn" => "Kirundi",
	"ro" => "Roumain",
	"ro_ro" => "Roumain (Roumanie)",
	"ru" => "Russe",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croate",
	"si" => "Cingalais",
	"sk" => "Slovaque",
	"sl" => "Slovène",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somalien",
	"sq" => "Albanais",
	"sr" => "Serbe",
	"sr_latin" => "Serbe (Latin)",
	"ss" => "Siswati",
	"st" => "Sotho du Sud",
	"su" => "Soudanais",
	"sv" => "Suédois",
	"sw" => "Swahili",
	"ta" => "Tamoul",
	"te" => "Télougou",
	"tg" => "Tadjik",
	"th" => "Thaï",
	"ti" => "Tigrinya",
	"tk" => "Turkmène",
	"tl" => "Tagalog",
	"tn" => "Tswana",
	"to" => "Tongien",
	"tr" => "Turc",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Ouïghour",
	"uk" => "Ukrainien",
	"ur" => "Ourdou",
	"uz" => "Ouzbek",
	"vi" => "Vietnamien",
	"vo" => "Volapük",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zhuang",
	"zh" => "Chinois",
	"zh_hans" => "Chinois simplifié",
	"zu" => "Zoulou",

	"field:required" => 'Requis.',

	"core:upgrade:2017080900:title" => "Modifier l'encodage de la base de données pour le support multi-byte",
	"core:upgrade:2017080900:description" => "Modifie l'encodage de la base de données et des tables pour utf8mb4, de manière à supporter les caractères multi-bytes tels que des emojis",
	
	"core:upgrade:2020102301:title" => "Supprimer le plugin diagnostics",
	"core:upgrade:2020102301:description" => "Supprime l'entité associée avec le plugin Diagnostics retiré dans Elgg 4.0",
	
	"core:upgrade:2021022401:title" => "Migrer les abonnements aux notifications",
	"core:upgrade:2021022401:description" => "Les abonnements aux notifications sont stockés différemment dans la base de données. Utilisez cette mise à niveau pour migrer tous les abonnements vers la nouvelle forme.",
	
	"core:upgrade:2021040701:title" => "Migrer les paramètres de notification des utilisateurs",
	"core:upgrade:2021040701:description" => "Afin d'avoir un moyen plus convivial pour les développeurs de stocker les paramètres de notification d'un utilisateur, une migration est nécessaire vers la nouvelle convention de nommage.",
	
	'core:upgrade:2021040801:title' => "Migrer les paramètres de notification des collections d'accès",
	'core:upgrade:2021040801:description' => "Une nouvelle manière de stocker les préférences de notification a été introduite. Cette mise à niveau migre les anciennes préférences vers la nouvelle logique.",
	
	'core:upgrade:2021041901:title' => "Supprimer le plugin notifications",
	'core:upgrade:2021041901:description' => "Supprime l'entité associée avec le plugin Notifications retiré dans Elgg 4.0",
	
	'core:upgrade:2021060401:title' => "Ajouter les propriétaires de contenus aux abonnés",
	'core:upgrade:2021060401:description' => "Les propriétaires de contenus devraient être abonnés à leur propres publications, cette mise à niveau migre tout l'ancien contenu.",
);
