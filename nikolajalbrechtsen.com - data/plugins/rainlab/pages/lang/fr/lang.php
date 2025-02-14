<?php return [
  'plugin' => [
    'name' => 'Pages',
    'description' => 'Fonctionnalités de pages et menus statiques.',
  ],
  'page' => [
    'menu_label' => 'Pages',
    'template_title' => '%s Pages',
    'delete_confirmation' => 'Confirmez-vous la suppression des pages sélectionnées ? Les sous-pages seront également supprimées.',
    'no_records' => 'Aucune page trouvée',
    'delete_confirm_single' => 'Confirmez-vous la suppression de cette page ? Les sous-pages seront également supprimées.',
    'new' => 'Nouvelle page',
    'add_subpage' => 'Ajouter une sous-page',
    'invalid_url' => 'Le format d’URL est invalide. L’URL doit commencer par un / et peut contenir des chiffres, des lettres et les symboles suivants : _-/.',
    'url_not_unique' => 'Cette URL est déjà utilisée par une autre page.',
    'layout' => 'Maquette',
    'layouts_not_found' => 'Aucune maquette trouvée',
    'saved' => 'La page a été sauvegardée avec succès.',
    'tab' => 'Pages',
    'manage_pages' => 'Gérer les pages statiques',
    'manage_menus' => 'Gérer les menus statiques',
    'access_snippets' => 'Accès aux fragments',
    'manage_content' => 'Gérer le contenu statique',
  ],
  'menu' => [
    'menu_label' => 'Menus',
    'delete_confirmation' => 'Confirmez-vous la suppression des menus sélectionnés ?',
    'no_records' => 'Aucun menu trouvé',
    'new' => 'Nouveau menu',
    'new_name' => 'Nouveau menu',
    'new_code' => 'nouveau-menu',
    'delete_confirm_single' => 'Confirmez-vous la suppression de ce menu ?',
    'saved' => 'Le menu a été sauvegardé avec succès.',
    'name' => 'Nom',
    'code' => 'Code',
    'items' => 'Éléments du menu',
    'add_subitem' => 'Ajouter un élément',
    'code_required' => 'Le Code est requis',
    'invalid_code' => 'Le format du Code est invalide. Le Code peut contenir des chiffres, des lettres et les symboles suivants : _-',
  ],
  'menuitem' => [
    'title' => 'Titre',
    'editor_title' => 'Modifier l’élément du menu',
    'type' => 'Type',
    'allow_nested_items' => 'Autoriser les sous-éléments',
    'allow_nested_items_comment' => 'Les sous-éléments peuvent être générés dynamiquement par les pages statiques et certains des autres types d’élément',
    'url' => 'URL',
    'reference' => 'Référence',
    'search_placeholder' => 'Rechercher toutes les références...',
    'title_required' => 'Le Titre est requis',
    'unknown_type' => 'Type d’élément du menu inconnu',
    'unnamed' => 'Élément de menu sans nom',
    'add_item' => 'Ajouter un élément',
    'new_item' => 'Nouvel élément du menu',
    'replace' => 'Remplacer cet élément part ses sous-éléments générés',
    'replace_comment' => 'Utiliser cette case à cocher pour envoyer les sous-éléments générés au même niveau que cet élément. Cet élément sera lui-même masqué.',
    'cms_page' => 'Page CMS',
    'cms_page_comment' => 'Sélectionnez une page à ouvrir lors d’un clic sur cet élément du menu.',
    'reference_required' => 'La référence de l’élément du menu est requis.',
    'url_required' => 'L’URL est requise',
    'cms_page_required' => 'Sélectionnez une page CMS s’il vous plaît',
    'display_tab' => 'Affichage',
    'hidden' => 'Caché',
    'hidden_comment' => 'Empêcher ce menu d\'apparaître sur le site web.',
    'attributes_tab' => 'Attributs',
    'code' => 'Code',
    'code_comment' => 'Entrez le code de l’élément du menu si vous souhaitez y accéder via l’API.',
    'css_class' => 'Classe CSS',
    'css_class_comment' => 'Entrez un nom de classe CSS pour donner à cet élément de menu une apparence personnalisée.',
    'external_link' => 'Lien externe',
    'external_link_comment' => 'Ouvrir les liens pour ce menu dans une nouvelle fenêtre.',
    'static_page' => 'Page Statique',
    'all_static_pages' => 'Toutes les pages',
  ],
  'content' => [
    'menu_label' => 'Contenu',
    'cant_save_to_dir' => 'L’enregistrement des fichiers de contenu dans le répertoire des pages statiques n’est pas autorisé.',
  ],
  'sidebar' => [
    'add' => 'Ajouter',
  ],
  'object' => [
    'invalid_type' => 'Type d’objet inconnu',
    'not_found' => 'L’objet demandé n’a pas été trouvé.',
  ],
  'editor' => [
    'title' => 'Titre',
    'new_title' => 'Nouveau titre de la page',
    'content' => 'Contenu',
    'url' => 'URL',
    'filename' => 'Nom du fichier',
    'layout' => 'Maquette',
    'description' => 'Description',
    'preview' => 'Aperçu',
    'enter_fullscreen' => 'Activer le mode plein écran',
    'exit_fullscreen' => 'Annuler le mode plein écran',
    'hidden' => 'Caché',
    'hidden_comment' => 'Les pages cachées sont seulement accessibles aux administrateurs connectés.',
    'navigation_hidden' => 'Masquer dans la navigation',
    'navigation_hidden_comment' => 'Cochez cette case pour masquer cette page dans les menus et le fil d’ariane générés automatiquement.',
  ],
  'snippet' => [
    'menu_label' => 'Fragments',
  ],
  'component' => [
    'static_page_name' => 'Page Statique',
    'static_page_description' => 'Affiche une page statique dans une maquette du CMS.',
    'static_page_use_content_name' => 'Affiche la section de contenu',
    'static_page_use_content_description' => 'Si cette case n\'est pas cochée, la section de contenu n\'apparaîtra pas lors de la modification de la page statique. Le contenu de la page sera déterminé uniquement à l\'aide d\'espaces réservés et de variables.',
    'static_page_default_name' => 'Disposition par défault',
    'static_page_default_description' => 'Définit cette mise en page par défault pour les nouvelles pages',
    'static_page_child_layout_name' => 'Mise en page de la sous-page',
    'static_page_child_layout_description' => 'La mise en page à utiliser par défault pour les nouvelles sous-pages',
    'static_menu_name' => 'Menu Statique',
    'static_menu_description' => 'Affiche un menu dans une maquette du CMS.',
    'static_menu_code_name' => 'Menu',
    'static_menu_code_description' => 'Spécifiez le code du menu que le composant devrait afficher.',
    'static_breadcrumbs_name' => 'Breadcrumbs statique',
    'static_breadcrumbs_description' => 'Affiche l\' aide à la navigation dans une page statique.',
    'child_pages_name' => 'Pages enfants',
    'child_pages_description' => 'Affiche une liste de pages enfants pour la page en cours',
  ],
];
