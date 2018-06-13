//Compteur du nombre d'ajout d'ingrédient
var count_ing = 1;


//Ajout d'un champ ingrédient dans une recette
function addIngField() {
  count_ing += 1;
  //Création nouvelle balise select
  var field = document.createElement("select");
  field.setAttribute("class","form-control col");
  field.setAttribute("name","ingField_");
  field.name += count_ing;

  //Recuperation de la div ingField et insertion de la nouvelle balise select
  var ingFields = document.getElementById( 'ingField' );
  ingFields.appendChild( field );
  //Ajout des option dans la/les noivelle balise select
  var field_options = document.getElementById( 'ingField_1' );
  for (var i = 0; i < field_options.length; i++) {
    field.options[ i ] = new Option( field_options.options[ i ].value,field_options.options[ i ].value );
  }
}
//Compteur de mot deans les champs descriptions
function countWord(chaine, formulaire) {
  var p = document.getElementById('count_word')
  var exp = new RegExp( "[a-zA-Z0-9éèêëàáâäóòôöíìîïçÉÈÊËÀÁÂÄÒÓÔÖÌÍÎÏÇ-]+","g" );
  var tabNom = chaine.match( exp );
  if ( tabNom == null ) {
    formulaire.count_word.value = "0 Mots écrits";
  }else {
    var affichage = tabNom.length + " Mots écrits";
    formulaire.count_word.value = affichage;
  }
}

//Recuperation du nombre d'ingrédient ajoutés
function recupCountRecipe(){
  //Création d'un input dissimulé
  var ing_count = document.createElement('input');
  ing_count.name = 'ing_c';
  ing_count.value = count_ing;
  ing_count.style.display = 'none';

  //Ajout de l'input dans le formulaire
  var input = document.getElementById('formRecipe');
  input.appendChild( ing_count );
}

var geocoder;
var map;
// initialisation de la carte Google Map de départ
function initMap() {
  geocoder = new google.maps.Geocoder();
  // Ici j'ai mis la latitude et longitude de l'ESGI
  var latlng = new google.maps.LatLng(48.8491666,2.3897342999999864);
  var mapOptions = {
    zoom      : 14,
    center    : latlng,
    mapTypeId : google.maps.MapTypeId.ROADMAP
  }
  // map-canvas est le conteneur HTML de la carte Google Map
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
}

function findAddress() {
  // Récupération de l'adresse tapée dans le formulaire
  var address = document.getElementById('adresse').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Adresse introuvable: ' + status);
    }
  });
}
// Lancement de la construction de la carte google map
google.maps.event.addDomListener(window, 'load', initMap);
