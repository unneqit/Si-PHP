<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" href="css/recap.css">
  <script src="scripts/particles.min.js"></script>
  <title>Halan</title>
</head>

<body>
  <div id="particles-js"></div>

  <header>
    <div class="headerContainer">
      <div class="logoContainer">
        <a href="index.php">
          <img class="logoImg" src="img/logo_gradient_Gradient.svg" alt="Logo Halan">
        </a>
      </div>

      <div class="menuContainer">
        <a class="menuItem-link" href="">destinations</a>
        <a class="menuItem-link" href="">about</a>
      </div>
    </div>
  </header>

  <section class="steps">
    <div class="stepsContainer">
      <h4 class="step step1">1</h4>
      <div class="stepSeparator1"></div>
      <h4 class="step step2">2</h4>
      <div class="stepSeparator2"></div>
      <h4 class="step step3">3</h4>
    </div>
  </section>

  <div class="title">
    <h2>Recap</h2>
  </div>

  <section class="mainContainer">

    <form class="informationForm" name="inscription" method="post" action="">

      <div class="inputContainer genderContainer">
        <h5>From</h5>
        <div class="select-wrapper">
          <div class="select-arrow"></div>
          <select disabled>
            <option value="">From1</option>
            <option value="">From2</option>
            <option value="">From3</option>
            <option value="">From4</option>
          </select>
        </div>
      </div>

      <div class="inputContainer planetContainer">
        <h5>Destination</h5>
        <div class="select-wrapper">
          <div class="select-arrow"></div>
          <select disabled>
            <option value="">Moon</option>
            <option value="">Mars</option>
            <option value="">Mercury</option>
            <option value="">Venus</option>
            <option value="">Xenion 500</option>
            <option value="">Europe</option>
          </select>
        </div>
      </div>

      <div class="inputContainer genderContainer">
        <h5>Civility</h5>
        <div class="select-wrapper">
          <div class="select-arrow"></div>
          <select disabled>
            <option value="">Mr</option>
            <option value="">Ms</option>
            <option value="">Other</option>
          </select>
        </div>
      </div>

      <div class="inputContainer nameContainer">
        <h5>Last Name</h5>
        <input disabled class="textInput nameInput" type="text" name="lastName" placeholder="Doe" value="Doe"/>
      </div>

      <div class="inputContainer firstNameContainer">
        <h5>First Name</h5>
        <input disabled class="textInput firstNameInput" type="text" name="firstName" placeholder="John" value="John">
      </div>

      <div class="inputContainer birthdayContainer">
        <h5>Date of birth</h5>
        <input disabled class="textInput birthdayInput" type="date" name="" value="2018-02-14">
      </div>

      <div class="inputContainer mailContainer">
        <h5>Mail adress</h5>
        <input disabled class="textInput mailInput" type="mail" name="" placeholder="example@email.com" value="example@email.com">
      </div>

      <div class="numberContainer heightContainer">
        <h5>Height (cm)</h5>
        <input disabled class="numberInput" type="number" name="" placeholder="175" value="175">
        </div>
      <div class="numberContainer weightContainer">
        <h5>Weight (kg)</h5>
        <input disabled class="numberInput" type="number" name="" placeholder="75" value="75">
      </div>


      <div class="buttonContainer">
        <input id="editButton" class="previousButton" type='button' name='previous' value="Edit informations">
        <input class="continueButton" type='submit' name='continue' value="Confirm">
      </div>
      <!-- PHP :
      if(isset($_POST['previous'])) { /* ...clear and reset stuff... */ }
      else if(isset($_POST['continue']) { /* ...submit stuff... */ } -->
    </form>
  </section>


  <script type="text/javascript">
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 355,
          "density": {
            "enable": true,
            "value_area": 789.1476416322727
          }
        },
        "color": {
          "value": "#ffffff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          },
          "image": {
            "src": "img/github.svg",
            "width": 100,
            "height": 100
          }
        },
        "opacity": {
          "value": 0.48927153781200905,
          "random": false,
          "anim": {
            "enable": true,
            "speed": 0.2,
            "opacity_min": 0,
            "sync": false
          }
        },
        "size": {
          "value": 2,
          "random": true,
          "anim": {
            "enable": true,
            "speed": 2,
            "size_min": 0,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 0.2,
          "direction": "none",
          "random": true,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "bubble"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 83.91608391608392,
            "size": 1,
            "duration": 3,
            "opacity": 1,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>

  <script>
    var edit_btn = document.querySelector('.previousButton');

    edit_btn.addEventListener('click', function(){
      var inputlist = document.querySelectorAll('input');
      for (var i = 0; i < inputlist.length; i++) {
        inputlist[i].removeAttribute('disabled');
      }
      var selectlist = document.querySelectorAll('select')
      for (var i = 0; i < selectlist.length; i++) {
        selectlist[i].removeAttribute('disabled');
      }
      window.scroll({top: 0, left: 0, behavior: 'smooth' });
    });
  </script>


</body>

</html>