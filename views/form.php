<!DOCTYPE html>
<html lang="fr">
  <head>
     <title>Ecolowash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Nicolas Diarra">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./assets/css/animate.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="screen">
    <link rel="icon" href="assets/img/favicons.png" sizes="32x32">
    <body>
        <div class="col-md-12" align="center">
            <div class="row">
                <img src="assets/img/ecolo.png" alt="ecolo">
            </div>
        </div>
        <div class="stepwizard col-xs-12 col-md-offset-3">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle circleColor"><strong>1</strong></a>
                    <p><strong>Étape 1</strong></p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle circleColor" disabled="disabled"><strong>2</strong></a>
                    <p><strong>Étape 2</strong></p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle circleColor" disabled="disabled"><strong>3</strong></a>
                    <p><strong>Étape 3</strong></p>
                </div>
            </div>
        </div>

        <form role="form" role="form" id="contactForm" class="contact-form" data-toggle="validator" >
          <div class="row setup-content" id="step-1">
                <div class="col-xs-12 col-md-offset-3">
                    <div class="col-md-6 contco">
                        <h3> Étape 1: Introduction</h3>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Nom</label>
                                <input maxlength="100" type="text" id="lastname" required="required" class="form-control" placeholder="Entrer votre nom" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Prénom</label>
                                <input maxlength="100" type="text" id="firstname" required="required" class="form-control" placeholder="Entrer votre prénom"  disabled>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Téléphone</label>
                                <input maxlength="100" type="tel" id="gsm" required="required" maxlength="10" class="form-control" placeholder="Entrer votre numéro de téléphone"  disabled>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Email</label>
                                <input maxlength="100" type="email" id="email" class="form-control" placeholder="Entrer votre email"  required="required" disabled>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Adresse</label>
                                <textarea class="form-control" id="adresse" placeholder="Entrer votre adresse"  required="required" disabled></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <button class="btn btn-primary next nextBtn btn-lg pull-right" type="button" disabled>Suivant</button>
                        <h3 class="ermsg" hidden></h3>
                    </div>
                </div>
            </div>

            <div class="row setup-content" id="step-2">
                <div class="col-xs-12 col-md-offset-3">
                    <div class="col-md-6 contco">
                        <h3> Étape 2: Véhicule</h3>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Marque</label>
                                <select class="form-control marque" required>
                                    <option selected required data-error="Veuillez choisir un modèle"></option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group m">
                            <div class="controls">
                                <label class="control-label">Modèle</label>
                                <select class="form-control modele" required>
                                    <option selected required data-error="Veuillez choisir un modèle"></option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label">Service</label>
                                <select class="form-control service" required data-error="Veuillez choisir un service" disabled>
                                    <option id="bronze">Bronze</option>
                                    <option id="silver">Silver</option>
                                    <option id="gold">Gold</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary prevBtn btn-lg pull-left">Précédent</button>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" disabled>Suivant</button>
                    </div>
                </div>
            </div>

            <div class="row setup-content" id="step-3">
                <div class="col-xs-12 col-md-offset-3">
                    <div class="col-md-6 contco">
                        <h3> Étape 3: Services supplémentaires</h3>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="traitement" id="traitement" name="traitement"> Traitement vitre antipluie</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="lustrage" id="lustrage" name="lustrage"> Lustrage, protection et brillance carrosserie</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="decontamination" id="decontamination" name="decontamination"> Décontamination, polissage, protection</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="degoudronage" id="degoudronage" name="degoudronage"> Dégoudronage, enlèvement de résine ou fiante d'oiseaux</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="poils" id="poils" name="poils"> Nettoyage poils d’animaux</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="moquette" id="moquette" name="moquette"> Shampoing tapis et moquette plus coffre</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="sieges" id="sieges" name="sieges"> Shampoing sièges et panneaux de portes</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="ciel" id="ciel" name="ciel"> Shampoing ciel de toit</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="cuir" id="cuir" name="cuir"> Shampoing cuir / tissus</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="nourrissant" id="nourrissant" name="nourrissant"> Traitement nourrissant et protecteur cuir</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="reconditionnement" id="reconditionnement" name="reconditionnement"> Reconditionnement complet</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="vapeur" id="vapeur" name="vapeur"> Assainissement vapeur système de chauffage et climatisation</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <label class="control-label"><input type="checkbox" value="nettoyage" id="nettoyage" name="nettoyage"> Nettoyage bloc moteur</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-primary prevBtn btn-lg pull-left">Précédent</button>
                    <button class="btn btn-success btn-lg pull-right" type="submit" id="submit">Submit</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- <div class="row setup-content" id="step-4">
                <div class="col-xs-12 col-md-offset-3">
                    <div class="col-md-6 contco">

                    </div>
                </div>
            </div> -->
        </form>
    </div>
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
  </body>
</html>
