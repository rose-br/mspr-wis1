<?php require_once 'template-parts/header.php'; ?>
    <section id="home-hero" style="background-image: url(assets/images/image-home.jpg)">


    <section id="form text-align">

        <div class="container">
            <h1>Formulaire pour etre le modèle d'un étudiant</h1>
            <p> A quoi ça sert d'etre modèle ?Imaginer, pour quelques euros symbolique vous aurez un make-up, une coupe,
                une manucure faite
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam enim expedita labore natus nesciunt
                quis reiciendis voluptate!
                Animi beatae doloremque in ipsa mollitia nihil nulla pariatur quae quaerat repudiandae saepe totam ullam
                unde, vel voluptatibus!
                Deleniti fugit itaque quas sed sint sit ullam? Deleniti, ducimus, perferendis repudiandae saepe totam
                ullam unde.
                Ab animi autem beatae cum deleniti deserunt dolor dolorum eaque earum est exercitationem illum ipsam,
                ipsum iure necessitatibus
                nemo nesciunt nobis non optio quam, quia rem rerum voluptates. Aperiam eos eum praesentium quasi
                voluptate?</p>
        </div>

    </section>
    <div class="container">


        <form>
            <legend><strong>Formulaire de contact</strong> </legend>

            <div class="mb-3">
                <label for="first_name" class="form-label">Prénom </label>
                <input type="text" class="form-control"
                       id="exampleFormControlInput1"
                       placeholder="Dominique"
                       required
                       required>

            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Nom </label>
                <input type="text" class="form-control"
                       id="exampleFormControlInput1"
                       placeholder="Dupont"
                       required>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Adresse mail</label>
                <input type="email" class="form-control"
                       id="exampleFormControlInput1"
                       placeholder="name@example.com"
                       required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Message</label>
                <textarea class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="3"> </textarea>
            </div>


<div class="container mb-3 align-text-bottom " >
    
    <legend> Vous voulez être modèle pour:</legend>
          <div class="card text-dark">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Maquillage</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Coiffure</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Manucure</label>
            </div>
          </div>
    </div>

            <div class="button-wrapper py-5 text-center">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    </form>
    </section>
<?php require_once 'template-parts/footer.php'; ?>