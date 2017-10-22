

<div id="step-2">

    <h1 class="row">Détails de réservation</h1>

    <div class="jumbotron container">
        <h3>Récapitulatif</h3>



    </div>

    <form method="post" action="index.php">


        <div class="row">

            <?php
            //creating a dictionnary people
            $people = array(); //doesn't work
            for ($i = 0; $i < (int) $trip->get_n_passengers(); ++$i) {

                $ts = isset($errors["t".$i])? $errors["t".$i] : true;
                $as = isset($errors["a".$i])? $errors["a".$i] : true;
                ?>

                <div class="col-md-4 passenger">

                    <h5>Voyageur #<?php echo $i + 1; ?> </h4>
                        <div class="form-group
                  <?php if (!$ts) { echo 'has-warning'; } ?>
                  ">
                            <label for="traveller">Nom</label>
                            <input name="traveller[]" type="text" placeholder="Voyageur" class="form-control
                      <?php if (!$ts) { echo 'form-control-warning'; } ?>"
                                <?php
                                if (array_key_exists($i, $trip->passengers)) {
                                    echo 'value="'.$trip->passengers[$i]->name.'"';
                                } ?>
                            />
                        </div>
                        <div class="form-group
                  <?php if (!$as) { echo 'has-warning'; } ?>
                  ">
                            <label for="age">Age</label>
                            <input name="age[]" type="text" placeholder="Age" class="form-control
                      <?php if (!$ts) { echo 'form-control-warning'; } ?>"
                            "
                            <?php  if (array_key_exists($i, $trip->passengers)) {
                                echo 'value="'.$trip->passengers[$i]->age.'"';
                            } ?>/>
                        </div>
                </div>
                <?php

            } ?>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <button name="step_2" class="btn btn-primary" name = "Submit">Suivant</button>
                <button name="destroy" class="btn btn-default">Annulation</button>
            </div>
        </div>
    </form>

    <div class="stepwizard">
        <div class="stepwizard-row">
            <div class="stepwizard-step">
                <button type="button" class="btn btn-default btn-circle">1</button>
                <p>Destination</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-primary btn-circle">2</button>
                <p>Détails de réservation</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                <p>Confirmation</p>
            </div>
        </div>
    </div>

</div>

<?php
include 'partials/footer.php';
?>

