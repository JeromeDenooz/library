<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="CSS/bibliotheque.css" rel="stylesheet">
	<title>Bibliothèque</title>
</head>
<body>
	<div class="container">
		<div class="row text-center" id="head">
			<h1>Bibliothèque/Ludothèque/BDthèque</h1>
			<img src="Documents/Books.jpg" alt="Books" id="imgBooks1"><img src="Documents/Books.jpg" alt="BooksBis" id="imgBooks2">
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="dropdown">
					<button class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1">
						AJOUTER UN MEDIA&nbsp&nbsp<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li class="menuMedia"><a href="#" data-type="LIVRE"><i class="glyphicon glyphicon-book"></i>&nbsp;LIVRE</a></li>
						<li class="menuMedia"><a href="#" data-type="FILM"><i class="glyphicon glyphicon-film"></i>&nbsp;FILM</a></li>
						<li class="menuMedia"><a href="#" data-type="MUSIQUE"><i class="glyphicon glyphicon-music"></i>&nbsp;MUSIQUE</a></li>
						<li class="menuMedia"><a href="#" data-type="BANDE-DESSINEE"><i class="glyphicon glyphicon-picture"></i>&nbsp;BANDE-DESSINEE</a></li>
						<li class="divider"></li>
    					<li class="menuMedia"><a href="#" data-type="Autre média"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Autre média</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1">Recherche</span>
  					<input type="text" class="form-control" placeholder="Titre, auteur, ..." aria-describedby="basic-addon1">
  					<span class="input-group-btn">
        				<button class="btn btn-default" type="button" id="btnSearch">Go!</button>
      				</span>
				</div>
				<div>
					<!-- <span><h3 class="text-center">Infos relatives à la recherche effectuée précédemment</h3></span> -->
					<div id="mediaListDiv">
						<h4 class="text-center">Résultats de l'affichage</h4>
					</div>
				</div>
			</div>
			<div class="col-md-2"><h3 class="text-center">Liste des x derniers medias ajoutés</h3>
			</div>
		</div>
		<div class="modal" id="modalBook">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Nouveau livre</h3>
				</div>
				<div class="modal-body">
					<form action="" class="form-horizontal" method="GET">
						<div class="form-group">
							<label for="titleBook" class="control-label col-sm-1">Titre</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Titre" id="titleBook">
							</div>
						</div>
						<div class="form-group">
							<label for="authorBook" class="control-label col-sm-1">Auteur</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Auteur" id="authorBook">
							</div>
						</div>
						<div class="form-group">
							<label for="editionBook" class="control-label col-sm-1">Edition</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Edition" id="editionBook">
							</div>
						</div>
						<div class="form-group">
							<label for="isbnBook" class="control-label col-sm-1">ISBN</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="1-234567-89-1" id="isbnBook">
							</div>
						</div>
						<div class="row" id="BookTypeBoxes">
							<label for="BookTypeBoxes" class="col-sm-1 text-right">Genre</label>
							<div class="col-sm-10" id="BookType">
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Autobiographie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Drame
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Philosophie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Thriller
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Aventure
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Comédie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Fantastique
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Histoire
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Policier
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Romance
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="BookType">Autre
									</label>
								</div>
							</div>
						</div>
						<div class="form-group coteMedia">
							<label for="evaluationBook" class="control-label col-sm-1">Cote</label>
							<div class="col-sm-2">
								<div class="input-group">
									<input type="number" class="form-control" min="0" max="20" step="1" id="evaluationBook">
									<span class="input-group-addon">/20</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="originBook" class="control-label col-sm-1">Provenance</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Ex : Maison de la culture Tournai" id="originBook">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        			<button type="button" class="btn btn-primary" id="saveBook">Enregistrer</button>
				</div>
			</div>
		</div>
		<div class="modal" id="modalMovie">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Nouveau film</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="titleMovie" class="control-label col-sm-1">Titre</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Titre" id="titleMovie">
							</div>
						</div>
						<div class="form-group">
							<label for="realisatorMovie" class="control-label col-sm-1">Réalisateur</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Réalisateur" id="realisatorMovie">
							</div>
						</div>
						<div class="form-group">
							<label for="timeMovie" class="control-label col-sm-1">Durée (en min.)</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="120" id="timeMovie">
							</div>
						</div>
						<div class="row" id="MovieTypeBoxes">
							<label for="MovieTypeBoxes" class="col-sm-1 text-right">Genre</label>
							<div class="col-sm-10" id="MovieType">
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Autobiographie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Drame
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Philosophie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Thriller
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Aventure
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Comédie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Fantastique
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Histoire
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Policier
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Romance
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MovieType">Autre
									</label>
								</div>
							</div>
						</div>
						<div class="form-group coteMedia">
							<label for="evaluationMovie" class="control-label col-sm-1">Cote du film</label>
							<div class="col-sm-11">
								<div class="input-group col-sm-1">
									<input type="number" class="form-control" min="0" max="20" step="1" id="evaluationMovie">
									<span class="input-group-addon">/20</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="originMovie" class="control-label col-sm-1">Provenance</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Ex : Maison de la culture Tournai" id="originMovie">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        			<button type="button" class="btn btn-primary">Enregistrer</button>
				</div>
			</div>
		</div>
		<div class="modal" id="modalMusic">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Nouvel album de musique</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="titleMusic" class="control-label col-sm-1">Titre</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Titre" id="titleMusic">
							</div>
						</div>
						<div class="form-group">
							<label for="realisatorMusic" class="control-label col-sm-1">Réalisateur</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Réalisateur" id="realisatorMusic">
							</div>
						</div>
						<div class="form-group">
							<label for="timeMusic" class="control-label col-sm-1">Durée (en min.)</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="120" id="timeMusic">
							</div>
						</div>
						<div class="row" id="MusicTypeBoxes">
							<label for="MusicTypeBoxes" class="col-sm-1 text-right">Genre</label>
							<div class="col-sm-10" id="MusicType">
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Autobiographie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Drame
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Philosophie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Thriller
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Aventure
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Comédie
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Fantastique
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Histoire
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Policier
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Romance
									</label>
								</div>
								<div class="checkbox col-sm-2">
									<label>
										<input type="checkbox" value="MusicType">Autre
									</label>
								</div>
							</div>
						</div>
						<div class="form-group coteMedia">
							<label for="evaluationMusic" class="control-label col-sm-1">Cote du film</label>
							<div class="col-sm-11">
								<div class="input-group col-sm-1">
									<input type="number" class="form-control" min="0" max="20" step="1" id="evaluationMusic">
									<span class="input-group-addon">/20</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="originMusic" class="control-label col-sm-1">Provenance</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" placeholder="Ex : Maison de la culture Tournai" id="originMusic">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        			<button type="button" class="btn btn-primary">Enregistrer</button>
				</div>
			</div>
		</div>
		<div class="modal" id="modalUpdateBook">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Modification d'un livre</h3>
				</div>
				<div class="modal-body">
				<form action="" class="form-horizontal">
					<div class="form-group">
					<label for="titleBookUpdate" class="control-label col-sm-1">Titre</label>
						<div class="col-sm-11">
							<input type="text" class="form-control" placeholder="" id="titleBookUpdate">
						</div>
					</div>
				</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
	        		<button type="button" class="btn btn-primary" id="saveBookUpdate" data-book-id="">Sauvegarder</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript">
	$(function () {
		var app=$('.container');

		displayAllBook();

		app.on('click', '.menuMedia a', function() {
			var media = $(this).data('type');
			console.log(media);
			switch (media) {
				case "LIVRE" :
					$('#modalBook').modal('show');
					break;
				case "FILM" :
					$('#modalMovie').modal('show');
					break;
				case "MUSIQUE" :
					$('#modalMusic').modal('show');
					break;
				case "BANDE-DESSINEE" :
					$('#modalMovie').modal('show');
					break;
				default :
					alert('Média inconnu');
			}
		});

		app.on('click', '#saveBook', function() {
			$('#modalBook').modal('hide');
			$.ajax({
				method : "POST",
				url : "add_book.php/livre",
				data : {
					titre : $('#titleBook').val(),
					auteur : $('#authorBook').val(),
					edition : $('#editionBook').val()
				}
			}).then(function(response) {
				//console.log(response.id);
			});
			return false;
		});

		app.on('click', '.mediaLink', function(){
			var titre = $(this).children('h4').text(),
				bookId = $(this).data('book-id');

			$('#titleBookUpdate').val(titre);
			$('#saveBookUpdate').data('book-id', bookId);
			$('#modalUpdateBook').modal('show');
			console.log($('#saveBookUpdate').data('book-id'));
			return false;
		});

		app.on('click', '#saveBookUpdate', function(){
			$('#modalUpdateBook').modal('hide');
			updateBook();
			return false;
		});
	});

	function displayAllBook() {
		$.ajax({
			method : "GET",
			url : "add_book.php/livre"
		}).then(function(response) {
			$('#mediaListDiv h4').show();
			$.each(response, function(i, item) {
				$('#mediaListDiv').append('<div class="list-group">' +
					'<a href="" class="list-group-item mediaLink" data-book-id=' + response[i].id +
					'><h4 class="list-grou-item-heading">' + response[i].titre + '</h4>' +
					'<div class="list-grou-item">Auteur : ' + response[i].auteur + '</div>' +
					'<div class="list-grou-item">Edition : ' + response[i].edition + '</div></div></a>');
			});
		});
		return false;
	}

	function updateBook() {
		var id = $('#saveBookUpdate').data('book-id');

		console.log("Début fonction");
		$.ajax({
			method : "PUT",
			url : "add_book.php/livre/" + id,
			data : {
				titre : $('#titleBookUpdate').val()
			}
		}).then(function(response){
			$('#mediaListDiv > div').remove();
			displayAllBook();
			console.log("OK MA POULE!!!");
		}).fail(function(){
			console.log("Raté");
		}).always(function(){
			console.log("Requète terminée");
		});
	}
</script>
</html>