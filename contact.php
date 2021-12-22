<!DOCTYPE html>

<?php
$message_sent = false;

if(isset($_POST['name']) && $_POST['name'] !='') {
if($_POST['age'] >= 18 && $_POST['age'] !='') {
if(isset($_POST['email']) && $_POST['email'] !='') {
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
if(isset($_POST['phone']) && $_POST['phone'] !='') {
// IF name,age,email and phone are filled out, submit form
$message_sent = true;
}
} else {
  $invalid_class_name = "form-invalid";
}
}
}
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <title>Thatsbalance | Contact</title>
  </head>
  <body>
    <main>
      <section class="contact-form-section">
        <nav>
          <div class="row">
            <ul class="contact-nav">
              <li>
                <a href="contact.php">Join</a>
              </li>
              <li>
                <a href="index.html#workouts">Workouts</a>
              </li>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="u-center-text u-margin-bottom-medium u-margin-top-small">
          <h1 class="heading-primary-contact js--h1-formintro">Contact</h1>
        </div>

        <div class="contact-form-intro u-margin-bottom-medium">
          <h2
            class="
              heading-secondary-contact
              u-center-text u-margin-bottom-small u-margin-top-small
            "
          >
            Get Fit With That's Balance!
          </h2>
          <p class="contact-p">
            Complete the application below for a free 10 minute call with
            Thanyous Wells, founder of That's Balance.
          </p>
        </div>

        <div class="contact-form-container">
          <form
            method="POST"
            action="https://sheetdb.io/api/v1/mtg4518ncllep"
            class="form"
            id="sheetdb-form"
            name="contact-form"
          >
            <div class="form__group">
              <input
                type="text"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Name"
                autocomplete="off"
                id="name"
                name="data[name]"
                required
              />
              <!--The label and input are connected thru the id and for properties. Both must have the same value(name)-->
              <label for="name" class="form__label">Name</label>
            </div>

            <div class="form__group">
              <input
                type="number"
                inputmode="numeric"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Age (must be over 18)"
                autocomplete="off"
                id="age"
                name="data[age]"
                required
              />
              <label for="age" class="form__label">Age</label>
            </div>

            <div class="form__group">
              <input
                type="email"
                inputmode="email"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Email"
                autocomplete="off"
                id="email"
                name="data[email]"
                required
              />
              <label for="email" class="form__label">Email Address</label>
            </div>

            <div class="form__group">
              <input
                type="number"
                inputmode="numeric"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Phone or WhatsApp #"
                autocomplete="off"
                id="phone"
                name="data[phone]"
                required
              />
              <label for="phone" class="form__label">Phone Number</label>
            </div>

            <div class="form__group">
              <label for="routine" class="form__textarea-label"
                >What does your current fitness routine consist of?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[fitnessroutine]"
                form="contact-form"
                placeholder="Days per week, excercises you do, etc"
                id="routine"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="diet" class="form__textarea-label"
                >What do you normally eat throughout the day?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[diet]"
                form="contact-form"
                placeholder="Your typical diet"
                id="diet"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="injuries" class="form__textarea-label"
                >Do you have any injuries or medical conditions that will affect
                your training?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[injuries]"
                form="contact-form"
                placeholder="Preexisting Injuries/Medical Conditions"
                id="injuries"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="goals" class="form__textarea-label"
                >What are some of your fitness goals?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[goals]"
                form="contact-form"
                placeholder="Weight, BMI, etc"
                id="goals"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="progress" class="form__textarea-label"
                >How much progress toward your fitness goals did you make last
                month?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[progresslastmonth]"
                form="contact-form"
                placeholder="Results in the past month"
                id="progress"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="roadblocks" class="form__textarea-label"
                >What roadblocks are preventing you from attaining your fitness
                goals?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[roadblocks]"
                form="contact-form"
                placeholder="Roadblocks"
                id="roadblocks"
              ></textarea>
            </div>

            <div class="form__group">
              <label for="trainer" class="form__textarea-label"
                >Do you have a personal trainer or are you following a specific
                program?</label
              >
              <textarea
                class="form__textarea"
                rows="4"
                cols="50"
                name="data[currenttrainer]"
                form="contact-form"
                placeholder="If so, describe the program or what your trainer has you do"
                id="trainer"
              ></textarea>
            </div>

            <div class="form__group">
              <p
                class="
                  form-p
                  u-center-text u-margin-bottom-small u-margin-top-medium
                "
              >
                How is your fitness progress going? (Most are in one of 3
                places)
              </p>

              <div class="form__group-radio">
                <div class="row u-margin-bottom-none">
                  <input
                    class="form__radio-btn"
                    type="radio"
                    id="poorly"
                    name="data[progress]"
                    value="Poorly"
                  /> 
                  <label class="form__radio-label" for="poorly"
                    >Poorly (zero to little progress)</label
                  >
                </div>
                 

                <div class="row u-margin-bottom-none">
                  <input
                    class="form__radio-btn"
                    type="radio"
                    id="struggling"
                    name="data[progress]"
                    value="Struggling"
                  />
                  <label class="form__radio-label" for="struggling"
                    >Struggling (some progress, but not as fast as you would
                    like)</label
                  >
                </div>
                 

                <div class="row">
                  <input
                    class="form__radio-btn"
                    type="radio"
                    id="successful"
                    name="data[progress]"
                    value="Successful"
                  />
                  <label class="form__radio-label" for="successful"
                    >Successful (good progress, just looking to sustain)</label
                  >
                </div>
              </div>
            </div>

            <div class="form__group">
              <p
                class="
                  form-p
                  u-center-text u-margin-bottom-small u-margin-top-medium
                "
              >
                If you began making fast progress towards your fitness goals,
                would you be interested?
              </p>

              <div class="form__group-radio">
                <div class="row u-margin-bottom-none">
                  <input
                    class="form__radio-btn"
                    type="radio"
                    id="yes"
                    name="data[interest]"
                    value="Yes"
                  /> 
                  <label class="form__radio-label" for="yes">Yes</label>
                </div>
              </div>
               

              <div class="row u-margin-bottom-none">
                <input
                  class="form__radio-btn"
                  type="radio"
                  id="no"
                  name="data[interest]"
                  value="No"
                />
                <label class="form__radio-label" for="no">No</label>
              </div>
               

              <div class="row">
                <input
                  class="form__radio-btn"
                  type="radio"
                  id="maybe"
                  name="data[interest]"
                  value="Maybe"
                />
                <label class="form__radio-label" for="maybe">Maybe</label>
              </div>
            </div>

            <div class="form__group">
              <p
                class="
                  form-p
                  u-center-text u-margin-bottom-small u-margin-top-medium
                "
              >
                Which one best fits you?
              </p>

              <div class="form__group-radio">
                <div class="row u-margin-bottom-none">
                  <input
                    class="form__radio-btn"
                    type="radio"
                    id="trial"
                    name="data[fit]"
                    value="Trial"
                  /> 
                  <label class="form__radio-label" for="trial"
                    >I want a free trial first</label
                  >
                </div>
              </div>
               

              <div class="row u-margin-bottom-none">
                <input
                  class="form__radio-btn"
                  type="radio"
                  id="talkfirst"
                  name="data[fit]"
                  value="talkfirst"
                />
                <label class="form__radio-label" for="talkfirst"
                  >I have to talk with my significant other or parents
                  first</label
                >
              </div>
               

              <div class="row u-margin-bottom-small">
                <input
                  class="form__radio-btn"
                  type="radio"
                  id="moneytight"
                  name="data[fit]"
                  value="Moneytight"
                />
                <label class="form__radio-label" for="moneytight"
                  >Money is a bit tight but I will make it work!</label
                >
              </div>

              <div class="row">
                <input
                  class="form__radio-btn"
                  type="radio"
                  id="imready"
                  name="data[fit]"
                  value="Imready"
                />
                <label class="form__radio-label" for="imready"
                  >SIGN ME UP, I WANT TO INVEST IN MYSELF! I'M READY!</label
                >
              </div>
            </div>

            <div class="row u-margin-top-medium">
              <button
                class="btn-main btn-main__navy btn-main__animated form__btn"
                type="submit"
                name="submit"
              >
                Send &rarr;
              </button>
            </div>
          </form>
        </div>
      </section>
    </main>


    <footer class="footer">
      <div class="row social">
        <div class="social__navigation">
          <ul class="social__list">
            <li class="social__item">
              <a
                href="https://www.facebook.com/thatsbalance"
                target="_blank"
                class="social__link"
                ><ion-icon name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li class="social__item">
              <a
                href="https://www.instagram.com/thatsbalance/"
                target="_blank"
                class="social__link"
                ><ion-icon name="logo-instagram"></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-1-of-2">
          <div class="footer__navigation">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="contact.php" class="footer__link">Join</a>
              </li>
              <li class="footer__item">
                <a href="index.html#workouts" class="footer__link">Workouts</a>
              </li>
              <li class="footer__item">
                <a href="index.html" class="footer__link">Home</a>
              </li>
              <li class="footer__item">
                <a href="faq.html" class="footer__link">FAQ</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-1-of-2">
          <p class="footer__copyright">
            Built by <a href="#" class="footer__link">Joseph Powell</a>; &nbsp;
            a Houston-based frontend developer. &nbsp; Copyright&copy; by Joseph
            Powell.
          </p>
        </div>
      </div>
    </footer>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
